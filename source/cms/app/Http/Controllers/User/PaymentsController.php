<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\OrderBuyToMail;
use App\Models\ActivityHistory;
use App\Models\Order;
use App\Models\ShoeSize;
use App\Models\UserShipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\User;
use App\Mail\GiftSenderToMail;
use App\Mail\GiftReceiverToMail;
use App\Mail\RegisterToMail;
use App;
use App\Services\CommonService;

class PaymentsController extends Controller
{
    public $currency = 'usd';
    public function index()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        if (Session::get('payment.status') == 'succeed') {
            $orderId = Session::get('payment.order_id');
            Log::error($orderId);
            Session::forget('payment.status');
            Session::save();
            return redirect('/shopping/thank-you/'.$orderId);
        };
        $error = Session::get('payment.error');
        Session::forget('payment.status');
        Session::save();
        return view('user.shopping_cart.payment_failed', compact('error'));
    }

    public function store(Request $request)
    {
        $language = Session::get('lang');
        App::setLocale($language);
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);
        $exchangeRate = CommonService::getExchangeRate($currencyCode);
        $amount = Session::get('order_cart.total');
        $amount_unit = $amount;
        if($currencyCode == 'VNĐ'){
            $amount = $amount*$exchangeRate;
            $currencyCode = 'VND';//hard code for stripe
        }
        if($currencyCode == 'USD'){
            $amount = $amount*100;
        }
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $token = $request->stripeToken;
            $customerEmail = Auth::user()->email;
            $customer = \Stripe\Customer::create(array(
                'email' => $customerEmail,
                'source' => $token
            ));
            $charge = Charge::create(array(
                'description' => "Shoes charge",
                'amount' => $amount,
                'currency' => strtolower($currencyCode),
                'customer' => $customer['id']
            ), array (
                'idempotency_key' => Session::get('payments.idempotency_key')
            ));
            Log::error($charge);
            // Handle Payment
            $paymentInfo = [
                'amount' => $amount_unit,
                'customer_id' => $charge->customer,
                'transaction_id' => $charge->id,
                'status' => $charge->status,
                'currency_code' => $currencyCode,
                'exchange_rate' => $exchangeRate,
                'note' => ''
            ];
            Session::put('order_cart.payment_info', $paymentInfo);
            $orderId = $this->saveOrderCartWhenPaymentSuccess();
            Session::forget('order_cart');
            Session::put('payment.status', 'succeed');
            Log::error(Session::get('payment.status'));
            Log::error('------------------');
            Log::error(Session::get('order_cart'));
            Session::put('payment.order_id', $orderId);
            Session::save();
            return redirect('/shopping/thank-you/'.$orderId);
        }
        catch(\Stripe\Error\Card $e) {
            Log::error($e->getJsonBody());
            // Since it's a decline, \Stripe\Error\Card will be caught
            $error = $e->getJsonBody()['error']['message'];
            Session::put('payment.status', 'failed');
            Session::put('payment.error', $error);
            Session::save();
            return view('user.shopping_cart.payment_failed', compact('error'));
        } catch (\Stripe\Error\RateLimit $e) {
            // Too many requests made to the API too quickly
            $error = $e->getJsonBody()['error']['message'];
            Session::put('payment.status', 'failed');
            Session::put('payment.error', $error);
            Session::save();
            return view('user.shopping_cart.payment_failed', compact('error'));
        } catch (\Stripe\Error\InvalidRequest $e) {
            // Invalid parameters were supplied to Stripe's API
            $errorBody = $e->getJsonBody();
            if (isset($errorBody['error']['code']) && $errorBody['error']['code'] == 'amount_too_large') {
                $error = Lang::get('pages.check_out.amount_too_large');
                Log::error($error);
            } else {
                $error = Lang::get('pages.check_out.stripe_token_already_used');
                Log::error($error);
            }
            Session::put('payment.status', 'failed');
            Session::put('payment.error', $error);
            Session::save();
            return view('user.shopping_cart.payment_failed', compact('error'));
        } catch (\Stripe\Error\Authentication $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
            $error = $e->getJsonBody()['error']['message'];
            Session::put('payment.status', 'failed');
            Session::put('payment.error', $error);
            Session::save();
            return view('user.shopping_cart.payment_failed', compact('error'));
        } catch (\Stripe\Error\ApiConnection $e) {
            // Network communication with Stripe failed
            $error = $e->getJsonBody()['error']['message'];
            Session::put('payment.status', 'failed');
            Session::put('payment.error', $error);
            Session::save();
            return view('user.shopping_cart.payment_failed', compact('error'));
        } catch (\Stripe\Error\Base $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
            $error = $e->getJsonBody()['error']['message'];
            Session::put('payment.status', 'failed');
            Session::put('payment.error', $error);
            Session::save();
            return view('user.shopping_cart.payment_failed', compact('error'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            Session::put('payment.status', 'failed');
            Session::put('payment.error', $error);
            Session::save();
            return view('user.shopping_cart.payment_failed', compact('error'));
        }
    }

    public function saveOrderCartWhenPaymentSuccess(){
        $language = Session::get('lang');
        Log::info('start save into DB');
        if(!Auth::check()) {
            //call refurn
        }
        App::setLocale($language);
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);
        $exchangeRate = CommonService::getExchangeRate($currencyCode);

        $orderCart = Session::get('order_cart');
        $billingInfo = Session::get('order_cart.billing_info');
        $shippingInfo = Session::get('order_cart.shipping_info');
        $paymentInfo = Session::get('order_cart.payment_info');
        $isSaveShipping = Session::get('order_cart.is_save_shipping');

        $orderCart['billing_info'] = $billingInfo;
        $orderCart['shipping_info'] = $shippingInfo;
        $orderCart['payment_info'] = $paymentInfo;
        if(empty($order_cart)){
            //call refurn
        }
        $orderNumber = $this->generateOrderNumber();
        $today = Carbon::now();
        $order = [
            'created_at'=>$today,
            'total_price'=>$orderCart['sub_total'],
            'status'=>1,
            'order_number'=>$orderNumber,
            'total'=>$orderCart['total'],
            'shipping_fee'=>$orderCart['shipping_fee'],
            "owner_id" => Auth::user()->id,            
            'currency_code' => $currencyCode,
            'exchange_rate' => $exchangeRate
        ];
        DB::beginTransaction();
        try {
            //save orders            
            Log::info('Save order data = '.json_encode($order));
            $orderId = DB::table('orders')->insertGetId($order);

            // save order_items
            $order_items =[];
            foreach($orderCart['items'] as $shoe){
//                Log::error($shoe);
                $shoeSizeId = ShoeSize::where('value', '=', $shoe['size'])->first()->id;
//                Log::error($shoeSizeId);
                $orderItems[]=[
                    'created_at'=>$today,
                    'order_id'=>$orderId,
                    'type_id'=>$shoe['shoe']->shoeTypes->id,
                    'style_id'=>$shoe['shoe']->id,
                    'shoe_size_id'=>$shoeSizeId,
                    'quantity'=>$shoe['quantity'],
                    'unit_price'=>$shoe['price_unit'],
                    'price_custom_fit'=>isset($shoe['price_custom_fit_unit'])?$shoe['price_custom_fit_unit']:0,
                    'total_price'=>$shoe['total_price']
                ];
            }
            
            Log::info('Save orderItems data = '.json_encode($orderItems));
            DB::table('order_items')->insert($orderItems);

            // save order_billings
            $orderCart['billing_info']['order_id'] = $orderId;
            $orderCart['billing_info']['created_at'] = $today;
            Log::info('Save billing_info data = '.json_encode($orderCart['billing_info']));            
            DB::table('order_billings')->insert($orderCart['billing_info']);

            // save order_shippings
            $orderCart['shipping_info']['order_id'] = $orderId;
            $orderCart['shipping_info']['created_at'] = $today;
            Log::info('Save order_shippings data = '.json_encode($orderCart['shipping_info']));            
            DB::table('order_shippings')->insert($orderCart['shipping_info']);

            // save order_payments
            $orderCart['payment_info']['order_id'] = $orderId;
            $orderCart['payment_info']['created_at'] = $today;
            Log::info('Save payment_info data = '.json_encode($orderCart['payment_info']));            
            DB::table('order_payments')->insert($orderCart['payment_info']);
            //send email buy
            // TODO: send mail to user for verify register
            $order_detail_url = url('/order').'/'.encrypt($orderNumber);
            $dataOrderBuyToMail = array("full_name" => Auth::user()->full_name, "order_detail_url" => $order_detail_url);
            Mail::to(Auth::user()->email)->send(new OrderBuyToMail($dataOrderBuyToMail));

            //flow send gift
            if($orderCart['is_gift']=='true'){
                Log::info('Flow send gift');            
                $this->processFlowGiftInstantly($orderId, $orderCart, $order_detail_url);
            }else{
                Log::info('xxxxxxxxxx isSaveShipping = '.$isSaveShipping);          
                if($isSaveShipping == 'true'){
                    // update user_shipping if not exist  
                    Log::info('xxxxxxxxxx userShipping process');                   
                    $userShipping = UserShipping::where('user_id',"=",Auth::user()->id)->first();
                    if(empty($userShipping)){
                        //create
                        $userShipping = [
                            'created_at' => $today,
                            'user_id' => Auth::user()->id,
                            'phone_number'=>$shippingInfo['phone_number'],
                            'address'=>$shippingInfo['address'],
                            'country_id'=>$shippingInfo['country_id'],
                            'state_id'=>$shippingInfo['state_id'],
                            'city_id'=>$shippingInfo['city_id']?$shippingInfo['city_id']:0,
                            'zipcode'=>$shippingInfo['zipcode'],
                            'note'=>$shippingInfo['note']
                        ];                    
                        Log::info('Create user shipping data = '.json_encode($userShipping));   
                        DB::table('user_shippings')->insert($userShipping);
                    }else{
                        Log::info('Update user shipping data = '.json_encode($shippingInfo));                       
                        UserShipping::where('user_id',"=",Auth::user()->id)
                            ->update([
                                'updated_at' => $today,
                                'phone_number'=>$shippingInfo['phone_number'],
                                'address'=>$shippingInfo['address'],
                                'country_id'=>$shippingInfo['country_id'],
                                'state_id'=>$shippingInfo['state_id'],
                                'city_id'=>$shippingInfo['city_id']?$shippingInfo['city_id']:0,
                                'zipcode'=>$shippingInfo['zipcode'],
                                'note'=>$shippingInfo['note']
                            ]);
                    }
                }                
            }
            DB::commit();
            Log::error('DB insert successfully');
            return encrypt($orderNumber);

        } catch (\Throwable $e) {
            Log::error('payment failed');
            $transactionId = DB::table('order_payments')->orderBy('created_at', 'desc')->first()->transaction_id;
            \Stripe\Refund::create(['charge' => $transactionId]);
            DB::rollback();
            throw $e;
        }

    }

    function generateOrderNumber(){
        $today = Carbon::now();        
        $day = $today->day;
        if($day<10){
            $day="0".$day;
        }
        $month = strtoupper($today->format('M'));
        //get total order success today
        $count = Order::whereDate('created_at', '=', date('Y-m-d'))->orderBy("id",'desc')->get()->count();
        $number = $count = $count+1;
        if($count<10){
            $number="00".$count;
        }
        if($count<=99 && $count >=10){
            $number="0".$count;
        }
        $orderNumber = $day.$month.$today->year.'-MTM'.$number;
        return $orderNumber;
    }

    public function processFlowGiftInstantly($orderId, $orderCart, $order_detail_url){
        $language = Session::get('lang');
        $user = Auth::user();
        //Send email to sender
        $dataGiftSender = ['sender_name' =>  $user->full_name,
            'friend_name' =>  $orderCart['shipping_info']['full_name'],
            'friend_email' => $orderCart['shipping_info']['email'],
            'shipping_info' => $orderCart['shipping_info']['address'],
            'order_detail_url'=>$order_detail_url];
        
        Log::info('Flow send gift GiftSenderToMail data = '.json_encode($dataGiftSender));        
        Mail::to($user->email)->send(new GiftSenderToMail($dataGiftSender));
        //Send email to receiver
        $dataGiftReceiver = ['sender_name' =>  $user->full_name,
            'friend_name' =>  $orderCart['shipping_info']['full_name'],
            'sender_email' => $user->email,
            'shipping_info' => $orderCart['shipping_info']['address'],
            'billing_info' => $orderCart['billing_info']['address'],
            'order_detail_url'=>$order_detail_url];
        
        Log::info('Flow send gift GiftReceiverToMail data = '.json_encode($dataGiftReceiver));  
        Mail::to($orderCart['shipping_info']['email'])->send(new GiftReceiverToMail($dataGiftReceiver));
        //Check receiver exist in system, if not exist --> register for reciever
        $receiver = User::where('email', '=', $orderCart['shipping_info']['email'])->first();
        $receiverId = null;
        if(empty($receiver)){
            //create user
            Log::info('Flow send gift create user = '.$orderCart['shipping_info']['email']);         
            $random_password = str_random(6);
            Log::info("password = ".$random_password);
            User::create([
                'full_name' => $orderCart['shipping_info']['full_name'],
                'email' => $orderCart['shipping_info']['email'],
                'password' => bcrypt($random_password),
                'email_verify_sent_at' => Carbon::now(),
            ]);

            // TODO: send mail to user for verify register
            $userReceiver = User::where('email', '=', $orderCart['shipping_info']['email'])->first();
            $user_data = array("id" => $userReceiver->id, "email" => $userReceiver->email);
            $verifyUrl = url('/user/verify') . '/' . encrypt($user_data);
            Mail::to($user->email)->send(new RegisterToMail($user, $verifyUrl));
            $receiverId = $userReceiver->id;
        }else{
            $receiverId = $receiver->id;
        }
        // update reciever_id on orders table
        DB::table('orders')
            ->where('id', $orderId)
            ->update(['receiver_id' => $receiverId]);
    }

    public function thankYou($orderId) {
        $order = null;
        try {
            $orderNumber = decrypt($orderId);
        } catch (DecryptException  $e) {
            return view('user.order.index', compact('order'));
        }
        $order = Order::where('order_number', $orderNumber)->first();
        return view('user.shopping_cart.thank_you',compact('order'));
    }
}
