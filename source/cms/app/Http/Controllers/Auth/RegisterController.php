<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterToMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
          $this->middleware('guest')->except('verify');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:20|regex:/^(?=.*\d)(?=.*[A-Z])/|confirmed',
            'g-recaptcha-response'=> 'required|recaptcha',
        ],
         [  'full_name.required' => @trans('pages.register.name_require'), 
            'g-recaptcha-response.required' => @trans('pages.register.captcha_required'),
            'required'=>@trans('pages.my_profile.required'),
            'string'=>@trans('pages.my_profile.string'),
            'old_password' => @trans('pages.my_profile.old_password'),
            'min'=> @trans('pages.my_profile.min'),
            'password_confirmation'=> @trans('pages.my_profile.password_confirmation'),
            'confirmed'=> @trans('pages.my_profile.confirmed'),
            'same'=> @trans('pages.my_profile.same'),
            'max'=> @trans('pages.my_profile.max'),
            'regex'=> @trans('pages.my_profile.regex'),

    ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $redirectUrl =  Session::get('redirectUrl'); 
        if($redirectUrl !=''){
            Session::put('redirectUrl','');
            $this->redirectTo = $redirectUrl;
        }
        else{
            $this->redirectTo = "/";
        }
        Session::flash('flash_message', @trans('pages.register.registered_successfully'));

        User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_verify_sent_at' => Carbon::now(),
        ]);

        // TODO: send mail to user for verify register
        $user = User::where('email', '=', $data['email'])->first();
        $userData = array("id" => $user->id, "email" => $user->email);
        $verifyUrl = url('/user/verify') . '/' . encrypt($userData);
        Mail::to($user->email)->send(new RegisterToMail($user, $verifyUrl));

        return $user;
    }

    private function validationMessages()
    {
        return [
            'full_name.regex' =>  @trans('pages.register.full_name_regex')
           ];
    }

    protected function verify($code) {

        try {
            $userData = decrypt($code);

            $user = User::where('id', '=', $userData['id'])
                ->where('email', '=', $userData['email'])->first();
            $userData = array("id" => $user->id, "email" => $user->email, "email_verify_sent_at" => $user->email_verify_sent_at);
            if ($user == null)
                // redirect error url
                return view('user.verify.error');
            else if ( $user->email_verified != 1){

                $timeThought = Carbon::parse($user->email_verify_sent_at)->diffInHours(Carbon::now());
                $isUrlExpired = ($timeThought < 48) ? false : true;
                if($isUrlExpired == true) {
                    // set time expired
                    $user->email_verify_sent_at = Carbon::now();
                    $user->save();
                    // TODO: send mail to user for verify register
                    $user = User::where('email', '=', $user->email)->first();
                    $userData = array("id" => $user->id, "email" => $user->email, "email_verify_sent_at" => $user->email_verify_sent_at);
                    $verifyUrl = url('/user/verify') . '/' . encrypt($userData);
                    Mail::to($user->email)->send(new RegisterToMail($user, $verifyUrl));
                    return view('user.verify.expired');
                }
                if(isset($userData['email_verify_sent_at'])){
                    if($user->email_verify_sent_at == $userData['email_verify_sent_at']) {
                        $user->email_verified = 1;
                        $user->save();
                        // redirect success url 
                        return view('user.verify.success');
                    }                    
                }
                return view('user.verify.expired');
                
            }
            else
                return view('user.verify.success');

        } catch (DecryptException $e) {
            // redirect error url
            return view('user.verify.error');
        }
    }
}
