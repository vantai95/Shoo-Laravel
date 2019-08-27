<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use App\Models\FlagshipStyle;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Session,File;
use App\Mail\ConfirmOrderToMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Configuration;
use App;
use Illuminate\Support\Facades\Auth;
use App\Services\CommonService;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    /*
    public function index(Request $request, $code)
    {
        
        $language = Session::get('lang');        
        App::setLocale($language);
        $order = null;
        try {

            $orderNumber = decrypt($code);

        } catch (DecryptException  $e) {
            return view('user.order.index', compact('order'));
        }
        $order = Order::where('order_number', $orderNumber)->first();
        $category = $order->package->category;
        $data = ['types'=>$category->shoeTypes,'styles' =>ShoeStyles::get(),'leather'=>$category->leather,
            'toeShapes' => $category->toeShapes,'outsoleTypes' =>$category->outsoleTypes];
        $dataFlagship =['flagShip'=>FlagshipStyle::get()];

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->first();

        return view('user.order.index', compact('order','data','dataFlagship', 'indiegogoLink'));
    }*/
    public function index(Request $request, $code)
    {
        
        $language = Session::get('lang');        
        App::setLocale($language);
        $order = null;
        if (!Auth::check()) {
            return redirect("/login");
        }
        try {
            $orderNumber = decrypt($code);
        } catch (DecryptException  $e) {
            return view('user.order.index', compact('order'));
        }
        $order = Order::where('order_number', $orderNumber)->first();    
        $canSeePrice = false;
        if(!empty($order) && Auth::check()){
            if($order->owner_id == Auth::user()->id || Auth::user()->role_id == 1){                
                $canSeePrice = true;        
            }
        }
        if(!empty($order)){
            foreach($order->orderItem as $key=>$item){
                $shoeType = ShoeTypes::firstOrFail()->where('id', '=', $item->type_id)->first();
                $shoeStyle = ShoeStyles::firstOrFail()->where('id', '=', $item->style_id)->first();
                $order->orderItem[$key]['item_url'] = url('/shoes-style-detail')."/".$shoeType->slug."/".$shoeStyle->slug;
            }
        }
        
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);        
        $exchangeRate = CommonService::getExchangeRate($currencyCode);
        return view('user.order.index', compact('order','canSeePrice','currencyCode','exchangeRate'));
    }

    public function store(Request $request)
    {        
        $language = Session::get('lang');        
        App::setLocale($language);
        $requestData = $request->all();
        $order= Order::findOrFail($request->orderId);
        if($order->status != 1){
            Session::flash('flash_error', 'You can not edit order.');
            return redirect('/');
        }
        if($requestData['typeShoe']=='Flagship'){
            $order= Order::findOrFail($request->orderId);
            $data =[
                'flagship_style_id' =>$request->flag_ship,
                'owner_id'=>$request->buyforS,
                'decorate'=> time() . '.' . $order->id . '.' . $request->imgS->getClientOriginalExtension(),
                'description'=>$request->descrip,
                'status' => 2,
            ];
            $photoName = time() . '.' . $request->orderId . '.' . $request->imgS->getClientOriginalExtension();
            $request->imgS->move(public_path(config('constants.FLAGSHIP_IMAGES_FOLDER')), $photoName);

            // remove old file
            if (!empty($request->orderId.$request->imgS)) {
                $oldFilePath = public_path(config('constants.FLAGSHIP_IMAGES_FOLDER')) . '/' . $request->orderId.$request->imgS;
                if (File::exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
            // update product feature image
            $request->orderId.$request->imgS = $photoName;
            $order->save();

            $order->update($data);
        }else {
            $order= Order::findOrFail($request->orderId);
            $data =[
                'type_id' =>$request->shoeTypeS,
                'style_id' =>$request->shoeStyleS,
                'toe_shape_id' =>$request->toeShapeS,
                'leather_id' =>$request->leatherColorS,
                'outsole_id' =>$request->outsoleTypeS,
                'owner_id'=>$request->buyforS,
                'status' => 2,
            ];
            $order->update($data);
        }

        // TODO: send mail to user for confirm order
        $downloadAppLink = env('DOWNLOAD_APP_LINK');
        $openAppLink = env('OPEN_APP_LINK');
        Mail::to($order->email)->send(new ConfirmOrderToMail($request, $order, $downloadAppLink, $openAppLink));

        Session::flash('flash_message', 'Ordered successfully!');
        return redirect('/');
    }
}
