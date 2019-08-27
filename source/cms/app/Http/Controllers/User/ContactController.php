<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Page;
use Illuminate\Http\Request;
use Session;
use App;

class ContactController extends Controller
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

        $bannerImage = Page::where('is_published',true)->select('pages.*', "page_name_$language as page_name")->first();

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*', "title_$language as title")->first();
        return view('user.contact.index',compact('bannerImage', 'indiegogoLink'));
    }
}
