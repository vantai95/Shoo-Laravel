<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HowItWork;
use App\Models\Configuration;
use Session;
use App;

class HowItWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $language = Session::get('lang');
        App::setLocale($language);
        // Load All How It Work is Published
        $howItWorks = HowItWork::where('is_published', true)->orderBy('index')->select(
                                    'how_it_works.*',
                                    "title_$language as title", 
                                    "description_$language as description"
                                )->get();
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published', true)->select('configurations.*', "title_$language as title")->first();
       
        return view('user.how_it_works.index', compact('howItWorks','indiegogoLink'));
    }
}
