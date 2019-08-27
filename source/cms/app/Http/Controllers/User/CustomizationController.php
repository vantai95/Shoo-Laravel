<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityHistory;
use App\Models\Configuration;
use App\Models\ShoeTypes;
use Illuminate\Http\Request;
use Session;
use App;

class CustomizationController extends Controller
{
    public function CustomShoeType(Request $request)
    {
        $language = Session::get('lang');
        App::setLocale($language);
        $shoeType = ShoeTypes::select(
                                'id',
                                "name_$language as name", 
                                "description_$language as description",
                                "description_home_$language as description_home",
                                "description_shoe_types_$language as escription_shoe_types",
                                "image_url"
                            )->get();

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('user.order.index', compact('shoeType', 'indiegogoLink'));

    }


}
