<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Session;
use App;
use App\Services\CommonService;

class ShoesStyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $shoes_type_slug)
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        $shoesType = ShoeTypes::where("slug",'=',$shoes_type_slug)->select(
                                                                    'id',
                                                                    "name_$language as name", 
                                                                    "description_$language as description",
                                                                    "description_home_$language as description_home",
                                                                    "description_shoe_types_$language as description_shoe_types",
                                                                    "image_url"
                                                                )->firstOrFail();
       // $shoesType_description = $shoesType->description_shoe_types;
        $shoesType_description = $shoesType->description;
        $shoesType_name = $shoesType->name;
        $shoesStyles = ShoeTypes::where("slug",'=',$shoes_type_slug)->firstOrFail()->shoeStyles()->orderBy('id')
                                ->select(
                                    'shoe_styles.*',
                                    "shoe_styles.description_$language as description",
                                    "shoe_styles.main_name_$language as main_name",
                                    "shoe_styles.sub_description_$language as sub_description",
                                    "shoe_styles.extra_$language as extra",
                                    "shoe_styles.sub_name_$language as sub_name"
                                )->get();
        //print_r(json_encode($shoesStyles));
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);        
        $exchangeRate = CommonService::getExchangeRate($currencyCode);

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*', "title_$language as title")->first();
        return view('user.shoes_style.index',compact('shoesStyles','shoesType_name','shoes_type_slug', 'shoesType_description', 'indiegogoLink','currencyCode','exchangeRate'));
    }


    public function getShoeStyles($id)
    {
        try {
            $language = Session::get('lang');        
            App::setLocale($language);

            $shoeStypes= ShoeStyles::where('shoe_types_id', $id)
            ->select(
                'shoe_styles.*',
                "shoe_styles.description_$language as description",
                "shoe_styles.main_name_$language as main_name",
                "shoe_styles.sub_description_$language as sub_description",
                "shoe_styles.extra_$language as extra",
                "shoe_styles.sub_name_$language as sub_name"
            )->get();
            foreach ($shoeStypes as $shoeStype)
            {
                $shoeStype->image_url = $shoeStype->imageUrl();
            }
            return response()->json($shoeStypes);

        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'success' => false,

            ]);
        }
    }

    public function getOverview(Request $request) {
        $language = Session::get('lang');        
        App::setLocale($language);
        $shoesTypes = ShoeTypes::orderBy('index')->select(
                                                            'id',
                                                            'slug',
                                                            "name_$language as name", 
                                                            "description_$language as description",
                                                            "description_home_$language as description_home",
                                                            "description_shoe_types_$language as escription_shoe_types",
                                                            "image_url"
                                                        )
                                                ->get();        
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*', "title_$language as title")->first();
        return view('user.shoes_style.overview', compact('shoesTypes','indiegogoLink'));
    }
}
