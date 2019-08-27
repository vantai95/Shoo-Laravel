<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use URL;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Session;
use App;
use View;
use App\Models\Configuration;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Session::get('lang')=='') {
            Session::put('lang', App::getLocale());// App::setLocale($locale);
        }
        $language = Session::get('lang');
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*', "title_$language as title")->first();
        
        $indiegogoUrl = isset($indiegogoLink) ?$indiegogoLink->config_value : 'https://www.indiegogo.com/projects/custom-fit-shoes-for-gentlemen-on-the-go#/';
        $indiegogoName = isset($indiegogoLink) ? $indiegogoLink->title : '';
        $campaignStatus = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_MENU_STATUS'])->where('is_published',
            true)->select('configurations.*', "title_$language as title")->first();
        
        $campaignMenuStatus = isset($campaignStatus) ?$campaignStatus->config_value : 0;
        View::share('indiegogoUrl', $indiegogoUrl);
        View::share('indiegogoName', $indiegogoName);
        View::share('campaignMenuStatus', $campaignMenuStatus);

//        URL::forceScheme('https');
        Schema::defaultStringLength(191);
        Validator::extend('html_required', function($attribute, $value, $parameters, $validator) {
            if(!empty($value) && strlen(trim(strip_tags($value))) > 0){
                return true;
            }
            return false;
        });

        Validator::extend('max_mb', function ($attribute, $value, $parameters, $validator) {

            if ($value instanceof UploadedFile && ! $value->isValid()) {
                return false;
            }

            // SplFileInfo::getSize returns filesize in bytes
            $size = $value->getSize() / 1024 / 1024;

            return $size <= $parameters[0];

        });

        Validator::replacer('max_mb', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':' . $rule, $parameters[0], $message);
        });

        Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {

            return Hash::check($value,Auth::user()->password);

        });

        Validator::extend('recaptcha', 'App\Validators\Recaptcha@validate');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
