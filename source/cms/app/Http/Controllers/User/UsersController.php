<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ActivityHistory;
use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Services\CommonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Log;
use App\Models\Configuration;
use App;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\UserShipping;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\UserAddition;
use App\Models\ShoeSize;
use App\Models\Size;
use App\Models\Measurement;
use Illuminate\Support\Facades\Storage;
use App\Jobs\downloadFeetImage;
use Queue;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {        
        $language = Session::get('lang');        
        App::setLocale($language);
        $keyword = $request->get('q');
        $perPage = config('constants.PAGE_SIZE');

        $isUser = $request->get('is_user') == 1;
        $isAdmin = $request->get('is_admin') == 1;

        if (!$isUser && !$isAdmin) {
            $isUser = true;
        }

        $users = User::orderBy('full_name');
        if (!empty($keyword)) {
            $keyword = CommonService::correctSearchKeyword($keyword);
            $users = $users->where(function ($query) use ($keyword) {
                $query->orWhere('full_name', 'LIKE', $keyword);
                $query->orWhere('email', 'LIKE', $keyword);
                $query->orWhere('phone', 'LIKE', $keyword);
            });
        }

        if ($isUser && !$isAdmin) {
            $users = $users->whereNull('role_id');
        } elseif (!$isUser && $isAdmin) {
            $users = $users->whereNotNull('role_id');
        }

        $users = $users->paginate($perPage);

        session(['mainPage' => $request->fullUrl()]);

        $total = User::count();

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('admin.users.index', compact('users', 'isUser', 'isAdmin', 'total', 'indiegogoLink'));
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
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = User::findOrFail($id);
        $isMyProfile = false;

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('users.show', compact('user', 'isMyProfile', 'indiegogoLink'));
    }

    public function myProfile()
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = Auth::user();
        $isMyProfile = true;

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('user.show', compact('user', 'isMyProfile', 'indiegogoLink'));
    }

    /*/**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {        
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = User::findOrFail($id);
        $isMyProfile = false;
        $roles = [null => 'Chọn quyền'];
        foreach (Role::all() as $role) {
            $roles = $roles + [$role->id => $role->name];
        }
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('user.edit', compact('user', 'isMyProfile', 'roles', 'indiegogoLink'));
    }

    public function editMyProfile()
    {        
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = Auth::user();
        $isMyProfile = true;
        return view('user.edit', compact('user', 'isMyProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {       
        $language = Session::get('lang');        
        App::setLocale($language);
         $this->updateData($id, $request, false);
        return redirect(CommonService::getPreviousUrl($request));
    }

    private function updateData($id, Request $request, $isMyProfile)
    {
        
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = User::findOrFail($id);

        $minAge = 18;

        $validateList = [
            'full_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'address' => 'max:300',
            'image_1' => 'image|max_mb:3'
        ];

        if (!empty($request->get('birth_day'))) {
            $validateList['birth_day'] = "before:-$minAge years";
        }

        
        $message = [
            'birth_day.before' =>  @trans('errors.user.user_age_validation', ['minAge' =>$minAge])
        ];

        if ($isMyProfile) {
            $validateList['email'] = "required|string|email|max:255|unique:users,email,$id";
            if (!empty($request->get('phone'))) {
                $validateList['phone'] = "unique:users,phone,$id|regex:/\+?[0-9]+$/";
            }
        }

        $this->validate($request, $validateList, $message);

        $requestData = $request->all();

        if (!$isMyProfile) {
            unset($requestData['email']);
            unset($requestData['phone']);
        } else {
            unset($requestData['role_id']);
            unset($requestData['is_locked']);
        }


        $user->update($requestData);
        //upload image
        if($request->hasFile('image_1'))
        {
            $this->changeProfileImage($request);
        }

        Session::flash('flash_message', @trans('pages.my_profile.update_profile_success'));

        return $user;
    }

    public function updateProfile(Request $request)
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        $this->updateData(Auth::id(), $request, true);

        return redirect('user/my-profile');
    }

    public function changeProfileImage(Request $request)
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = Auth::user();

        // create new file
        $photoName = time() . '.' . $user->id . '.' . $request->image_1->getClientOriginalExtension();
        $request->image_1->move(public_path(config('constants.AVATAR_PROFILE_FOLDER')), $photoName);

        // remove old file
        if (!empty($user->image_1)) {
            $oldFilePath = public_path(config('constants.AVATAR_PROFILE_FOLDER')) . '/' . $user->image_1;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update user image
        $user->image_1 = $photoName;
        $user->save();

        return redirect('admin/my-profile/edit');
    }

    public function changeUserProfileImage($id, Request $request)
    {
        $language = Session::get('lang');        
        App::setLocale($language);

        $user = User::findOrFail($id);
        // create new file
        $photoName = time() . '.' . $user->id . '.' . $request->image_1->getClientOriginalExtension();
        $request->image_1->move(public_path(config('constants.AVATAR_PROFILE_FOLDER')), $photoName);

        // remove old file
        if (!empty($user->image_1)) {
            $oldFilePath = public_path(config('constants.AVATAR_PROFILE_FOLDER')) . '/' . $user->image_1;
            if (File::exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // update user image
        $user->image_1 = $photoName;
        $user->save();

        return redirect("admin/users/$user->id/edit");
    }

    /*/**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function changePassword($id)
    {
        
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = User::findOrFail($id);
        $isMyProfile = false;
        return view('user.change_password', compact('user', 'isMyProfile'));
    }

    public function changeMyPassword()
    {
        
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = Auth::user();
        $isMyProfile = true;

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('user.change_password', compact('user', 'isMyProfile', 'indiegogoLink'));
    }

    /*
     * Change password
     *
     */
    public function updatePassword(Request $request)
    {
        
        $language = Session::get('lang');        
        App::setLocale($language);
        $user = Auth::user();
        $validateList = [
            'old_password' => 'required|min:8|old_password',
            'password' => 'required|string|min:8|max:20|regex:/^(?=.*\d)(?=.*[A-Z])/',
            'password_confirmation' => 'required|min:8|same:password',
        ];
        $message = [
            'required'=>@trans('pages.my_profile.required'),
            'old_password' => @trans('pages.my_profile.old_password'),
            'min'=> @trans('pages.my_profile.min'),
            'password_confirmation'=> @trans('pages.my_profile.password_confirmation'),
            'confirmed'=> @trans('pages.my_profile.confirmed'),
            'same'=> @trans('pages.my_profile.same'),
            'max'=> @trans('pages.my_profile.max'),
            'regex'=> @trans('pages.my_profile.regex'),
            
        ];

        $this->validate($request, $validateList, $message);

        $requestData = $request->all();

        $password = Hash::make($requestData['password']);

        $user->update(['password'=>$password]);
        Session::flash('flash_message', @trans('pages.my_profile.password_updated_success'));

        return redirect('/');
    }    

    public function shippingInformation(){
        if (!Auth::check()) {
            return redirect("/login");
        }
        $user = Auth::user();
        // return view('user.shipping_information', compact('user'));
        //load User Shipping
        $countries = Country::get();
        $states = [];
        $cities = [];

        $userShipping = UserShipping::where('user_id', '=', Auth::user()->id)->first();
        if (!empty($userShipping)) {
            $userShipping->user = $userShipping->user()->first();
            $states = State::where('country_id', '=', $userShipping->country_id)->get();
            if ($userShipping->state_id>0) {
                $cities = City::where('state_id', '=', $userShipping->state_id)->get();
            }
        }else{
            $states = State::where('country_id', '=', 1)->get();
            if (!empty($states)) {
                $cities = City::where('state_id', '=', $states[0]->id)->get();
            }
        } 
        $isMyProfile = false;
        return view('user.shipping_information', compact('user', 'isMyProfile', 'countries', 'states', 'cities', 'userShipping'));
    }
    public function changeShippingInfo(Request $request){
        Log::error($request);    
        $today = Carbon::now();
        $validateList = [
            'shipping_phone_number' => 'required|regex:/\+?[0-9]+$/|max:12',
            'shipping_address' => 'required|max:150',
            'shipping_note' => 'nullable|string|max:300'
        ];
        $message = [
            'shipping_phone_number.before' => @trans('pages.user.feet_profile.number_error')."1000",
            'shipping_address.before' => @trans('pages.user.feet_profile.number_error'). "500",
            'shipping_country.before' => @trans('pages.user.feet_profile.number_error')."1000",
            'shipping_state.before' => @trans('pages.user.feet_profile.number_error'). "500",
            'shipping_zipcode.before' => @trans('pages.user.feet_profile.number_error'). "500",
        ];
        $this->validate($request, $validateList, $message);
        $shippingInfo = [
                'phone_number' => $request['shipping_phone_number'],
                'address' => $request['shipping_address'],
                'country_id' => $request['shipping_country'],
                'state_id' => $request['shipping_state'],
                'city_id' => $request['shipping_city'] ? $request['shipping_city'] : 0,
                'zipcode' => $request['shipping_zipcode'],
                'note' => $request['shipping_note']
            ];
            
        try {
            // update user_shipping if not exist
            $userShipping = UserShipping::where('user_id',"=",Auth::user()->id)->first();
            if(empty($userShipping)){
                //create
                $userShipping = [
                    'created_at' => $today,
                    'user_id' => Auth::user()->id,
                    'phone_number'=>$shippingInfo['phone_number'],
                    'address'=>$shippingInfo['address'],
                    'country_id'=>$shippingInfo['country_id'],
                    'state_id'=>$shippingInfo['state_id']?$shippingInfo['state_id']:0,
                    'city_id'=>$shippingInfo['city_id']?$shippingInfo['city_id']:0,
                    'zipcode'=>$shippingInfo['zipcode'],
                    'note'=>$shippingInfo['note']
                ];
                UserShipping::insert($userShipping);
            }else{
                UserShipping::where('user_id',"=",Auth::user()->id)
                    ->update([
                        'updated_at' => $today,
                        'phone_number'=>$shippingInfo['phone_number'],
                        'address'=>$shippingInfo['address'],
                        'country_id'=>$shippingInfo['country_id'],
                        'state_id'=>$shippingInfo['state_id']?$shippingInfo['state_id']:0,
                        'city_id'=>$shippingInfo['city_id']?$shippingInfo['city_id']:0,
                        'zipcode'=>$shippingInfo['zipcode'],
                        'note'=>$shippingInfo['note']
                    ]);
            }
            Session::flash('flash_message', @trans('pages.user.save_shipping_success'));            
            return redirect('/user/shipping-information');

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error($e->getMessage());
            $error = $e->getMessage();
            Session::flash('flash_message', $error);            
            return redirect('/user/shipping-information');

        }
       
        
    }

    public function feetProfile(){
        if (!Auth::check()) {
            return redirect("/login");
        }
        $user = Auth::user();
        
        $language = Session::get('lang');        
        App::setLocale($language);
        // return view('user.shipping_information', compact('user'));
        //load User Shipping
        $countries = Country::get();
        $userAddition = UserAddition::where('user_id', '=', Auth::user()->id)->first();
        if (!empty($userAddition)) {
            $userAddition->user = $userAddition->user()->first();
        }
        $isMyProfile = false;
        $fnShoeSizes = Size::orderBy('value', 'asc')->get();       
        //get list image
        $arrImages = [];
        $measurement = Measurement::where('user_id',"=",  Auth::user()->id)->orderby('id', 'desc')->first();
        if(!empty($measurement)){
            $measurementCode = $measurement->code;
            $resPath = "https://" . env('FTP_USERNAME') . ":" .  env('FTP_PASSWORD') . "@" . env('FTP_HOST') . '/' . $measurementCode;
            $desPath = base_path() . config('constants.MEASUREMENT_FOLDER') . '\\' .$measurementCode;
            $resPathRegular = url(config('constants.MEASUREMENT_FOLDER').$measurementCode);
            
            $numPictures = 6;
            for ($i=0; $i<$numPictures; $i++) {
                $imageName = 'photo' . ($i + 1) . '.jpg';
                $arrImages[] = $resPathRegular . '/' . $imageName; 
            }    
        }    
        
        return view('user.feet_profile', compact('user', 'isMyProfile', 'countries', 'fnShoeSizes', 'userAddition','arrImages','measurement'));
    }
    
    public function changeFeetProfile(Request $request){
        Log::error($request); 
        $today = Carbon::now();
       

        $validateList = [
            'user_country' => 'required|string',
            'user_weight' => 'required|numeric|min:1|max:1000',
            'user_height' => 'required|numeric|min:1|max:500',
            'user_note' => 'nullable|string|max:300'
        ];
        $message = [
            'user_weight.before' => @trans('pages.user.feet_profile.number_error')."1000",
            'user_height.before' => @trans('pages.user.feet_profile.number_error'). "500"
        ];

        $this->validate($request, $validateList, $message);
        try {
            // update user_shipping if not exist
            $userAddition = UserAddition::where('user_id',"=",Auth::user()->id)->first();
            if(empty($userAddition)){
                //create
                $userAddition = [
                    'created_at' => $today,
                    'user_id' => Auth::user()->id,
                    'country_id' => $request['user_country'],
                    'size_id' => $request['user_shoe_size'],
                    'shoe_width' => $request['user_shoe_width'],
                    'note' => $request['user_note']
                ];
                UserAddition::insert($userAddition);
            }else{
                UserAddition::where('user_id',"=",Auth::user()->id)
                    ->update([
                        'updated_at' => $today,
                        'country_id' => $request['user_country'],
                        'size_id' => $request['user_shoe_size'],
                        'shoe_width' => $request['user_shoe_width'],
                        'note' => $request['user_note']
                    ]);
            }
            // update measurements
            if(!empty($request['measurement_id'])){
                Measurement::where('id',"=",$request['measurement_id'])
                    ->update([
                        'updated_at' => $today,
                        'gender' => $request['user_gender'],
                        'weight' => $request['user_weight'],
                        'height' => $request['user_height']
                    ]);
        
            }
           
            Session::flash('flash_message', @trans('pages.user.save_feet_success'));            
            return redirect('/user/feet-profile');

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error($e->getMessage());
            $error = $e->getMessage();
            Session::flash('flash_error', $error);            
            return redirect('/user/feet-profile');


        }
    }

    // order
    public function myOrders(Request $request){
         if (!Auth::check()) {
            return redirect("/login");
        }
        $language = Session::get('lang');        
        App::setLocale($language);
        
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);        
        $exchangeRate = CommonService::getExchangeRate($currencyCode);

        $order_completed_id = $request->get('order_completed_id');
        $order_id = $request->get('order_id');
        $perPage = config('constants.PAGE_SIZE_ORDER');
        $userOrders = Order::where('owner_id', '=', Auth::user()->id )->where('status','<=',5)->orderBy('id','desc');
        $userOrders = $userOrders->paginate($perPage, ['*'], 'userOrders');
        $userOrderscompleted  = Order::where('owner_id', '=', Auth::user()->id )->where('status','=',6)->orderBy('id','desc');
        $userOrderscompleted = $userOrderscompleted->paginate($perPage,['*'],'userOrderscompleted');
         return view('user/order',compact('userOrders','userOrderscompleted','order_id','order_completed_id','currencyCode','exchangeRate')); 
    }
    // Logout
    public function logout(Request $request)
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        Auth::logout();
        Session::put('order_cart',[]);
        return redirect('/');
          
    }
}
