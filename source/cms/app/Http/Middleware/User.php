<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App;
class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $language = Session::get('lang');        
        App::setLocale($language);
        if (Auth::check() && !Auth::user()->isLocked()) {
            return $next($request);
        } elseif(!Auth::check()){
            Session::flash('flash_message', 'Login failed');
        } elseif (Auth::user()->isLocked()){
            Session::flash('flash_message', 'Your account is blocked.');
        }

        Auth::logout();         
        Session::put('order_cart',[]);
        return redirect('/login');
    }
}
