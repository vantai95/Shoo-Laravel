<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\AboutUsDescription;
use App\Models\AboutUs;
use App;
use Session;

class AboutUsController extends Controller
{
    public function index(){
        $language = Session::get('lang');
        App::setLocale($language);
        $aboutUsImages = AboutUs::select('image')->where('is_banner', '=', false)->orderBy('id')->get();
        $aboutUsBanner = AboutUs::select('image')->where('is_banner', '=', true)->first();
        $aboutUsDescription = AboutUsDescription::select('about_us_description.*',"description_$language as description","sub_description_$language as sub_description")->first();
       
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*', "title_$language as title")->first();
        return view('user.about_us.index',compact('aboutUsImages','aboutUsDescription', 'aboutUsBanner', 'indiegogoLink'));
    }
}
