<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use App\Models\Order;
use App\Models\FacebookLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\ProductPackage;
use App\Mail\SimpleEmailSender;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Log;
use App\Services\LogService;
use Maatwebsite\Excel\Classes\PHPExcel_Shared_Date;
//use
class FacebookLeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 20; //config('constants.PAGE_SIZE');

        $facebookLeads = FacebookLead::orderBy('registered_date', 'desc');

        $facebookLeads = $facebookLeads->paginate($perPage);

        $total = FacebookLead::count();

        return view('admin.facebook_leads.index', compact('facebookLeads', 'total'));
    }

    /**
     * Export data to excel file.
     *
     * @return \Illuminate\View\View
     */
    public function exportExcel()
    {
        $facebookLeads = FacebookLead::orderBy('registered_date', 'desc')->get();

        $array = [];

        array_push($array, [
            'No',
            'id',
            'created_time',
            'email',
            'full_name',
            'phone_number'
        ]);
        foreach ($facebookLeads as $item){
            $registered_date = \PHPExcel_Shared_Date::PHPToExcel(strtotime($item->registered_date));
            array_push($array, [$item->id, $item->facebook_id, $registered_date, $item->email, $item->full_name, $item->phone_number]);
        }

        $arrayLength = count($array);
        return Excel::create('FacebookLeads', function ($excel) use ($array, $arrayLength) {
            $excel->sheet('Facebook Leads', function ($sheet) use ($array,$arrayLength) {
                $sheet->fromArray($array, null, 'A1', true, false);
                Log::error($arrayLength);
                $sheet->cells('A1:F1', function ($cells) {
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                });
                $sheet->setColumnFormat(array("C2:C$arrayLength" => 'm/d/yy'));
            });
        })->download('xlsx');
    }

    public function importExcel(Request $request)
    {
        try {
            if ($request->hasFile('excel_file')) {
                $count = 0;
                $path = $request->file('excel_file')->getRealPath();
                Excel::load($path, function ($reader) use ($count) {
                    $data = $reader->toArray();
                    foreach ($data as $facebookLead) {
                        if (!empty($facebookLead['id'])
                            && !empty($facebookLead['created_time'])
                            && !empty($facebookLead['email'])
                            && !empty($facebookLead['full_name'])
                            && !empty($facebookLead['phone_number'])) {

                            $existed = FacebookLead::where('facebook_id', $facebookLead['id'])->exists();

                            if (!$existed) {
                                try {
                                    $facebookLeadData = [
                                        'facebook_id' => $facebookLead['id'],
                                        'registered_date' => $facebookLead['created_time'],
                                        'email' => $facebookLead['email'],
                                        'full_name' => $facebookLead['full_name'],
                                        'phone_number' => $facebookLead['phone_number'],
                                    ];
                                    FacebookLead::create($facebookLeadData);
                                    $count = $count + 1;

                                } catch (Exception $e) {
                                    Log::error($e->getMessage());
                                }
                            }
                        }
                    }

                    if($count > 0){
                        Session::flash('flash_message', "Imported $count facebook leads successfully!");
                    }
                    else{
                        Session::flash('flash_message', "No facebook leads imported!");
                    }
                });
                return redirect('admin/facebook-leads');
            }
        } catch (Exception $e) {
            Session::flash('flash_error', 'Import failed: ' + $e->getMessage());
        }

        return redirect('admin/facebook-leads');
    }
}
