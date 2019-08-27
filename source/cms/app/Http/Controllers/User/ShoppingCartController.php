<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ActivityHistory;
use App\Models\ShoeStyles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\UserShipping;
use App\Models\Order;
use DB;
use App;
use App\Services\CommonService;

class ShoppingCartController extends Controller
{
    public function index()
    {
        Session::forget('payment.status');
        Session::save();
        $language = Session::get('lang');
        App::setLocale($language);
        $selectedShoes = Session::get('order_cart.items') ? Session::get('order_cart.items') : [];
        $orderCart = Session::get('order_cart') ? Session::get('order_cart') : [];
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);
        $exchangeRate = CommonService::getExchangeRate($currencyCode);

        return view('user.shopping_cart.index', compact('selectedShoes', 'orderCart' ,'currencyCode','exchangeRate'));
    }

    public function userCart()
    {
        Session::forget('payment.status');
        Session::save();
        $language = Session::get('lang');

        App::setLocale($language);
        $isGift = Session::get('order_cart.is_gift');
        if ($isGift == 1) {
            Session::put('order_cart.is_gift', 'false');
        }
        $selectedShoes = Session::get('order_cart.items') ? Session::get('order_cart.items') : [];
        $orderCart = Session::get('order_cart') ? Session::get('order_cart') : [];
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);
        $exchangeRate = CommonService::getExchangeRate($currencyCode);
        if(empty($selectedShoes)){
            return view('user.shopping_cart.user_cart_empty');
        }
        return view('user.shopping_cart.user_cart', compact('selectedShoes', 'orderCart', 'currencyCode','exchangeRate'));
    }

    public function addToCart(Request $request)
    {
        // validation
        Log::error("addToCart");
        Log::error($request);
        $language = Session::get('lang');


        // init data for session order_cart
        $items = [];
        // add data to shoe item
        $shoe = $request['selectedShoe'];
        $orderCart = Session::get('order_cart');
        $is_update = 0;
        if ($shoe['is_gift'] == 'true') {
            Session::forget('order_cart');
        }
        if($is_update==0){
            $shoeInfo = ShoeStyles::where('id', '=', $shoe['id'])->select(
                'shoe_styles.*',
                "shoe_styles.main_name_$language as main_name"
            )->first();
            $shoe['price_unit'] = $shoeInfo->discount_price ? $shoeInfo->discount_price : $shoeInfo->price;
            $shoe['price_custom_fit_unit'] = 0;
            if($shoe['size']==0){
                $shoe['price_custom_fit_unit'] = 100;
            }
            $shoe['total_price'] = $shoe['quantity'] * ($shoe['price_custom_fit_unit'] + $shoe['price_unit']);
            $shoe['name'] = $shoeInfo->main_name;
            $shoe['image'] = $shoeInfo->imageUrl();
            $shoe['slug'] = $shoeInfo->slug;
            $shoe['shoe'] = $shoeInfo;
            // check request is gift or shopping cart
            if ($shoe['is_gift'] == 'true') {
                Log::error('gift');
                Session::forget('order_cart'); // forget order_cart session
            } else {
                Log::error('no gift');
                // Check order_cart is existed
                if (!Session::get('order_cart')) {

                } else {
                    $items = Session::get('order_cart.items') ? Session::get('order_cart.items') : [];
                }
            }
            //        Log::error($shoe['is_gift']);
            Log::error($items);
            array_push($items, $shoe);
            $subTotal = $this->calSubTotal($items);
            $shippingFee = $this->calShipFee($items);
            // save order cart data into session
            Session::put('order_cart.items', $items);
            Session::put('order_cart.sub_total', $subTotal);
            Session::put('order_cart.shipping_fee', $shippingFee);
            Session::put('order_cart.total', $subTotal + $shippingFee);
            Session::put('order_cart.user_id', Auth::user() ? Auth::user()->id : -1);
            Session::put('order_cart.billing_info', null);
            Session::put('order_cart.shipping_info', null);
            Session::put('order_cart.is_gift', $shoe['is_gift']);
        } else {
            Session::put('order_cart.items', $orderCart['items']);
        }
        // return response
        return response()->json([
            'messages' => 'Your Shoes has successfully added to Cart.',
            'status' => 200
        ], 200);
    }

    public function checkOut()
    {
        Log::error(Session::get('payment.status'));
        if(Session::get('payment.status') != null) {
            return redirect('/shopping/payments');
        }
        Log::error("checkOut");
        $language = Session::get('lang');
        $idempotencyKey = str_random(10);
        Session::put('payments.idempotency_key', $idempotencyKey);
        Log::error('$idempotencyKey: ' . $idempotencyKey);
        App::setLocale($language);
        if (!Auth::check()) {
            return redirect("/login");
        }
        //load user billing
        $lastOrder = Order::where('owner_id', '=', Auth::user()->id)->orderBy('id', 'desc')->first();
        $lastOrderBilling = [];
        if (!empty($lastOrder))
            $lastOrderBilling = $lastOrder->orderBilling;
        //load User Shipping
        $userShipping = UserShipping::where('user_id', '=', Auth::user()->id)->first();
        if (!empty($userShipping)) {
            $userShipping->user = $userShipping->user()->first();
        }
        if (empty(Session::get('order_cart'))) {
            Session::flash('flash_error', @trans('pages.check_out.order_cart_empty'));
            return redirect("/");
        }
        $orderCart = Session::get('order_cart');
        $total_amout = Session::get('order_cart.total');
        if($total_amout<=0){
            Session::flash('flash_error', @trans('pages.check_out.order_cart_empty'));
            return redirect("/");
        }
        $selectedShoes = Session::get('order_cart') ? Session::get('order_cart.items') : [];
        $countries = Country::get();
        $states = State::where('country_id', '=', $countries[0]->id)->get();
        $cities = null;
        if (isset($states[0]->id)) {
            $cities = City::where('state_id', '=', $states[0]->id)->get();
        }
        if($orderCart['is_gift']=='true'){
            $userShipping=[];
        }

        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);
        $exchangeRate = CommonService::getExchangeRate($currencyCode);
        return view('user.shopping_cart.check-out', compact('selectedShoes', 'orderCart', 'countries', 'states', 'cities', 'userShipping', 'lastOrderBilling','currencyCode','exchangeRate'));
    }

    public function removeFromCart(Request $request)
    {
        Log::error('Request params to removeFromCart');
        Log::error($request);
        Log::error('-------');
        Log::error('---before updateCardItemsQuantity----');
        Log::error(Session::get('order_cart'));
        $orderCart = Session::get('order_cart');
        Log::error(Session::get('order_cart'));
        $shoes = $orderCart['items'];
        foreach( $shoes as $key=>$shoe) {
            if ( $shoe['order_id'] == $request['order_id']) {
                array_pull($shoes, $key);
            }
        }
        $subTotal = $this->calSubTotal($shoes);
        $shippingFee = $this->calShipFee($shoes);
        Session::put('order_cart.items', $shoes);
        Session::put('order_cart.sub_total', $subTotal);
        Session::put('order_cart.shipping_fee', $shippingFee);
        Session::put('order_cart.total', $subTotal + $shippingFee);
        Log::error('---after updateCardItemsQuantity----');
        Log::error(Session::get('order_cart'));
        return response()->json([
            'messages' => 'Removed A Shoe!',
            'status' => 200
        ], 200);
    }

    public function changeQuantity(Request $request)
    {
        Log::error('change');
        $shoes = Session::get('order_cart.items');
        Session::pull('order_cart.items');
        // change shoe quantity
        $shoes[$request['id']]['quantity'] = $request['quantity'];
        $shoes[$request['id']]['total_price'] = $shoes[$request['id']]['size'] == 0 ?
            $request['quantity'] * ($shoes[$request['id']]['price_unit'] + 100) :
            $request['quantity'] * $shoes[$request['id']]['price_unit'];
//        foreach($shoes as &$shoe) {

//            Session::push('order_cart.items', $shoe);
//        }
        Session::put('order_cart.items', $shoes);
        Log::error($request['quantity']);
//        Log::error($shoes);
//        Log::error(Session::get('order_cart.items'));
        $subTotal = $this->calSubTotal(Session::get('order_cart.items'));
        $shippingFee = $this->calShipFee(Session::get('order_cart.items'));
        $billingInfo = [];
        $shippingInfo = [];
        $isGift = 0;
        Session::put('order_cart.sub_total', $subTotal);
        Session::put('order_cart.shipping_fee', $shippingFee);
        Session::put('order_cart.total', $subTotal + $shippingFee);
        Session::put('order_cart.user_id', Auth::user() ? Auth::user()->id : -1);
        Session::put('order_cart.billing_info', $billingInfo);
        Session::put('order_cart.shipping_info', $shippingInfo);
        return response()->json([
            'messages' => 'Removed A Shoe!',
            'status' => 200
        ], 200);
    }

    public function getStatesOrCities(Request $request)
    {
        Log::error($request);
        $country_id = isset($request['country_id']) ? $request['country_id'] : '';
        // init response data
        $data = [];
        $data['cities'] = [];
        $data['states'] = [];
        $data['states'] = State::where('country_id', '=', $country_id)->get();
        Log::error("data['states:']:");
        Log::error($data['states']);
        if(sizeof($data['states']) == 0) {
            $data['cities'] = City::where('country_id', '=', $country_id)->get();
            Log::error("data['cities']:");
            Log::error($data['cities']);
        }
        return json_encode($data);
    }

    public function getCountries(){
        $data = [];
        $data['countries'] = [];
        $data['countries'] = Country::all();
        Log::error("data['countries']");
        Log::error($data['countries']);
        return json_encode($data);
    }

    public function getStatesInCountry(Request $request) {
        $countryId = isset($request['country_id']) ? $request['country_id'] : '';
        // init response data
        $data = [];
        $data['states'] = [];
        $data['states'] = State::where('country_id', '=', $countryId)->get();
        Log::error("data['states']");
        Log::error($data['states']);
        return json_encode($data);
    }

    public function getCitiesInState(Request $request) {
        Log::error($request);
        $stateId = isset($request['state_id']) ? $request['state_id'] : '';
        // init response data
        $data = [];
        $data['cities'] = [];
        $data['cities'] = City::where('state_id', '=', $stateId)->get();
        Log::error("data['cities']");
        Log::error($data['cities']);
        return json_encode($data);
    }

    public function getCitiesInCountry(Request $request) {
        Log::error($request);
        $countryId = isset($request['country_id']) ? $request['country_id'] : '';
        // init response data
        $data = [];
        $data['cities'] = [];
        $data['cities'] = City::where('country_id', '=', $countryId)->get();
        Log::error("data['cities']");
        Log::error($data['cities']);
        return json_encode($data);
    }

    public function getQuantityItems() {
        $data = [];
        $cardItems = Session::get('order_cart') ? Session::get('order_cart.items') : [];
        $cardNumberQuantity = 0;
        foreach ($cardItems as $cardItem) {
            $cardNumberQuantity += $cardItem['quantity'];
        }
        Log::error($cardNumberQuantity);
        $data['card_number_quantity'] = $cardNumberQuantity;
        return json_encode($data);
    }

    public function calSubTotal($shoes)
    {
        $subTotal = 0;
        foreach ($shoes as $key => $shoe) {
            if ($shoe) {
                $shoeInfo = ShoeStyles::where('id', '=', $shoe['id'])->first();
                $shoePrice = $shoeInfo->discount_price ? $shoeInfo->discount_price : $shoeInfo->price;
                if ($shoe['size'] == 0)
                    $subTotal += $shoe['quantity'] * ($shoePrice + 100);
                else
                    $subTotal += $shoe['quantity'] * $shoePrice;
            }
        }
        return $subTotal;
    }

    public function calShipFee($shoes)
    {
        $subTotal = $this->calSubTotal($shoes);
        if ($subTotal == 0) // List Shoes is empty
            return 0;
        if ($subTotal > 500)
            return 0;
        $numShoes = 0;
        foreach ($shoes as $shoe) {
            if ($shoe) $numShoes += $shoe['quantity'];
        }
        return 15 + ($numShoes - 1) * 10;// 15$ for first pair, 10$ for other shoes
    }

    public function calTotal($shoes)
    {
        return $this->calSubTotal($shoes) + $this->calShipFee($shoes);
    }

    public function shippingInfo(){
        if(Session::get('order_cart') == null)
            redirect('/');
        Log::error("shippingInfo");
        $language = Session::get('lang');
        App::setLocale($language);

        if (!Auth::check()) {
            Session::put('redirectUrl',url()->full());
            return redirect("/login");
        }
        if (empty(Session::get('order_cart'))) {
            Session::flash('flash_error', @trans('pages.check_out.order_cart_empty'));
            return redirect("/");
        }
        $total_amout = Session::get('order_cart.total');
        if($total_amout<=0){
            Session::flash('flash_error', @trans('pages.check_out.order_cart_empty'));
            return redirect("/");
        }
        //load user billing
        $lastOrder = Order::where('owner_id', '=', Auth::user()->id)->orderBy('id', 'desc')->first();
        $lastOrderBilling = [];
        if (!empty($lastOrder))
            $lastOrderBilling = $lastOrder->orderBilling;
        //load User Shipping
        $userShipping = UserShipping::where('user_id', '=', Auth::user()->id)->first();
        if (!empty($userShipping)) {
            $userShipping->user = $userShipping->user()->first();
        }
        $is_gift = Session::get('order_cart.is_gift');
        if($is_gift=='true'){
            $userShipping = [];
        }
        $selectedShoes = Session::get('order_cart') ? Session::get('order_cart.items') : [];
        $countries = Country::get();
        $states = State::where('country_id', '=', $countries[0]->id)->get();
        $cities = null;
        if (isset($states[0]->id)) {
            $cities = City::where('state_id', '=', $states[0]->id)->get();
        }
        Log::error('$lastOrderBilling');
        Log::error($lastOrderBilling);
        return view('user.shopping_cart.shipping-information', compact( 'countries', 'states', 'cities', 'userShipping', 'lastOrderBilling'));

    }

    function saveShippingInfo(Request $request){
        Log::error('$request');
        Log::error($request);
        $this->validate($request, [
            'phone_number' => 'required|regex:/\+?[0-9]+$/|max:12',
            'billing_address' => 'required|max:150',
            'billing_country' => 'required',
            'billing_state' => 'nullable|string',
            'billing_city' => 'nullable|string',
            'billing_zipcode' => 'required|regex:/\+?[0-9]+$/|max:12',
            'billing_note' => 'nullable|string|max:300',
            'shipping_full_name' => 'required|string|regex:/^[\pL\s\-]+$/u|max:25',
            'shipping_email' => 'required|email|max:40',
            'shipping_phone_number' => 'required|regex:/\+?[0-9]+$/|max:12',
            'shipping_address' => 'required|max:150',
            'shipping_country' => 'required|string',
            'shipping_state' => 'nullable|string',
            'shipping_city' => 'nullable|string',
            'shipping_zipcode' => 'required|regex:/\+?[0-9]+$/|max:12',
            'shipping_note' => 'nullable|string|max:300']);
        // Save info to session
        $billingInfo = [
            'phone_number' => $request['phone_number'],
            'address' => $request['billing_address'],
            'country_id' => $request['billing_country'],
            'state_id' => $request['billing_state'],
            'city_id' => $request['billing_city'] ? $request['billing_city'] : 0,
            'zipcode' => $request['billing_zipcode'],
            'note' => $request['billing_note']
        ];
        if($request['is_same_address']==1){
            $shippingInfo = [
                'full_name' => $request['shipping_full_name'],
                'email' => $request['shipping_email'],
                'phone_number' => $request['shipping_phone_number'],
                'address' => $request['billing_address'],
                'country_id' => $request['billing_country'],
                'state_id' => $request['billing_state'],
                'city_id' => $request['billing_city'] ? $request['billing_city'] : 0,
                'zipcode' => $request['billing_zipcode'],
                'note' => $request['billing_note']
            ];
        }
        else{
            $shippingInfo = [
                'full_name' => $request['shipping_full_name'],
                'email' => $request['shipping_email'],
                'phone_number' => $request['shipping_phone_number'],
                'address' => $request['shipping_address'],
                'country_id' => $request['shipping_country'],
                'state_id' => $request['shipping_state'],
                'city_id' => $request['shipping_city'] ? $request['shipping_city'] : 0,
                'zipcode' => $request['shipping_zipcode'],
                'note' => $request['shipping_note']
            ];
        }
        Session::put('order_cart.billing_info', $billingInfo);
        Session::put('order_cart.shipping_info', $shippingInfo);
        return redirect('/shopping/checkout');
    }

    function updateCardItemsQuantity(Request $request) {
        Log::error($request);
        $shoesInClient = $request['cart_items_quantity']['items'];
        $orderCart = Session::get('order_cart');
        Log::error('---before updateCardItemsQuantity----');
        Log::error(Session::get('order_cart'));
        $shoes = $orderCart['items'];
        foreach( $shoes as &$shoe) {
            foreach( $shoesInClient as $shoeInClient) {
                if ( $shoe['order_id'] == $shoeInClient['order_id']) {
                    $shoe['quantity'] = $shoeInClient['quantity'];
                    $shoe['total_price'] = $shoe['quantity'] * ($shoe['price_custom_fit_unit'] + $shoe['price_unit']);
                }
            }
        }
        $subTotal = $this->calSubTotal($shoes);
        $shippingFee = $this->calShipFee($shoes);
        Session::put('order_cart.is_save_shipping', $request['is_save_shipping']);
        Session::put('order_cart.items', $shoes);
        Session::put('order_cart.sub_total', $subTotal);
        Session::put('order_cart.shipping_fee', $shippingFee);
        Session::put('order_cart.total', $subTotal + $shippingFee);
        Log::error('---after updateCardItemsQuantity----');
        Log::error(Session::get('order_cart'));
        return response()->json([
            'messages' => 'Update Success Shoes Quantity',
            'status' => 200
        ], 200);
    }
}
