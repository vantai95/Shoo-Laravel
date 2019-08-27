<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Configuration;
use Session;
use App;

class PageController extends Controller
{
    public function index($slug){       
        $language = Session::get('lang');        
        App::setLocale($language);
        $page = Page::where("slug", $slug)->select('pages.*', "page_name_$language as page_name")->firstorFail();

        $details = $page->meta()->where('key', \App\Models\PageMeta::CONSTANTS['DETAIL'])->select('pages_meta.*', "value_$language as value")->first();

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('user.pages.index', compact('page', 'details', 'indiegogoLink'));
    }
}
