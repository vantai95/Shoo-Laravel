<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\SocialAccountService;
use Illuminate\Support\Facades\Log;
use Socialite;
use Session;

class SocialAuthController extends Controller
{
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social ,Request $request)
    {
       
        $language = Session::get('lang');        
        App::setLocale($language);
        if($request->input('error')!=''){            
            Session::flash('flash_error', 'Truy cập bị từ chối');
            return redirect()->to('/login');
        }
        $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->stateless()->user(), $social);
        auth()->login($user);
        $redirectUrl =  Session::get('redirectUrl'); 
        if($redirectUrl !=''){
            Session::put('redirectUrl','');
            return redirect()->to($redirectUrl);
        }
        else{
            return redirect()->to('/');
        }

        
        
    }
}
