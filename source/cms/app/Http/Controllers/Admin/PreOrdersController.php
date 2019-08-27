<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use App\Models\Order;
use App\Models\PreOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\ProductPackage;
use App\Mail\SimpleEmailSender;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Log;

class PreOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 20; //config('constants.PAGE_SIZE');

        $preOrders = PreOrder::orderBy('created_at', 'desc')
            ->leftJoin('product_packages', 'pre_orders.package_id', '=', 'product_packages.id')
            ->select('pre_orders.id', 'pre_orders.name', 'pre_orders.email', 'pre_orders.phone', 'pre_orders.created_at',
                     'product_packages.name_en as package_name', 'product_packages.price');

        $preOrders = $preOrders->paginate($perPage);

        $total = PreOrder::count();

        return view('admin.pre_orders.index', compact('preOrders', 'total'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $preOrder = PreOrder::findOrFail($id);

        return view('admin.pre_orders.show', compact('preOrder'));
    }

    /**
     * Export data to excel file.
     *
     * @return \Illuminate\View\View
     */
    public function exportExcel()
    {
        $preOrders = PreOrder::orderBy('created_at', 'desc')
            ->leftJoin('product_packages', 'pre_orders.package_id', '=', 'product_packages.id')
            ->select('pre_orders.id', 'pre_orders.name', 'pre_orders.email', 'pre_orders.phone', 'pre_orders.created_at',
                'product_packages.name_en as package_name', 'product_packages.price')->get();

        $array = [];

        array_push($array, [
            'No.',
            'Name',
            'Email',
            'Phone',
            'Package',
            'Price (USD)',
            'Order Date'
        ]);

        foreach ($preOrders as $item) {
            array_push($array, [$item->id, $item->name, $item->email, $item->phone, $item->package_name, $item->price, $item->created_at]);
        }

        return Excel::create('PreOrders', function ($excel) use ($array) {
            $excel->sheet('Pre Orders', function ($sheet) use ($array) {
                $sheet->fromArray($array, null, 'A1', true, false);

//                 $sheet->setWidth(array(
//                     'A' => 30,
//                     'B' => 30,
//                     'C' => 30,
//                     'D' => 30,
//                     'E' => 30,
//                     'F' => 30,
//                     'G' => 30,
//                 ));

                // $sheet->cells('A2:G2', function ($cells) {
                //     $cells->setAlignment('center');
                //     $cells->setFontWeight('bold');
                // });

                //     $sheet->setColumnFormat(array(
                //         "A$i:G$i" => '#,##0'
                //     ));

            });
        })->download('xlsx');
    }
}
