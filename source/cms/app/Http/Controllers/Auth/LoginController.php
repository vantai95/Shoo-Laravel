<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $language = Session::get('lang');        
        App::setLocale($language);
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['is_locked' => false]);
    }

    protected function authenticated(Request $request, $user)
    {
        
        if(!($user->isAdmin())){
            Session::flash('flash_message', @trans('pages.login.login_successfully'));
            $redirectUrl =  Session::get('redirectUrl'); 
            if($redirectUrl !=''){
                Session::put('redirectUrl','');
                $this->redirectTo = $redirectUrl;
            }
            else{
                $this->redirectTo = "/";
            }
        }
        

    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        Session::flash('flash_error',  @trans('pages.login.login_failed'));
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string|email|',
            'password' => 'required|string',
            'g-recaptcha-response'=> 'required|recaptcha',
        ], ['g-recaptcha-response.required' =>  @trans('pages.login.captcha_required')]);
    }
}
