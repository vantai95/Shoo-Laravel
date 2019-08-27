<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ShoeSize;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Page;
use App\Models\Configuration;
use Session;
use App;
use App\Services\CommonService;

class ShoesStyleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $shoes_type_slug,$shoes_style_slug)
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
        $shoesType_description = $shoesType->description;
        $shoesType_name = $shoesType->_name;

        $shoesType = ShoeStyles::join('shoe_types', 'shoe_types.id', '=', 'shoe_styles.shoe_types_id')
            ->where("shoe_styles.slug", '=', $shoes_style_slug)
            ->select(
                'shoe_styles.*',
                "shoe_styles.description_$language as description",
                "shoe_styles.main_name_$language as main_name",
                "shoe_styles.sub_description_$language as sub_description",
                "shoe_styles.extra_$language as extra",
                "shoe_styles.sub_name_$language as sub_name"
            )
            ->firstOrFail();

        $shoesStyleDetail = ShoeStyles::where("shoe_styles.slug",'=', $shoes_style_slug)
            ->select(
                'shoe_styles.*',
                "shoe_styles.description_$language as description",
                "shoe_styles.main_name_$language as main_name",
                "shoe_styles.sub_description_$language as sub_description",
                "shoe_styles.extra_$language as extra",
                "shoe_styles.sub_name_$language as sub_name"
            )
            ->firstOrFail();   
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published', true)->select('configurations.*',"title_$language as title")->first();
        $relatedProduct =ShoeTypes::firstOrFail()->shoeStyles()->where('id', '!=', $shoesStyleDetail->id)                                    
                                    ->select(
                                        'shoe_styles.*',
                                        "shoe_styles.description_$language as description",
                                        "shoe_styles.main_name_$language as main_name",
                                        "shoe_styles.sub_description_$language as sub_description",
                                        "shoe_styles.extra_$language as extra",
                                        "shoe_styles.sub_name_$language as sub_name"
                                    )->orderBy("main_name_$language")->take(4)->get();                   
        $shoeSizes = ShoeSize::orderBy('value', 'asc')->get();
        $fnArray = [];
        $customFit = [];
        foreach($shoeSizes as $key=>$item){
            if($item->value>0){
                array_push($fnArray,$item);
            }
            if($item->value==0){
                $customFit = $item;
            }
        }
        array_push($fnArray,$customFit);        
        $shoeSizes = $fnArray;               
        //set default size
        $sizeDefaultValue = 41;//hard code
        $sizeDefaultId = null;
        foreach($shoeSizes as $shoeSize) {
            if($shoeSize->value == $sizeDefaultValue) {
                $sizeDefaultId = $shoeSize->id;
            }
        }
        $currencyCode = CommonService::getCurrencyCodeByLanguage($language);        
        $exchangeRate = CommonService::getExchangeRate($currencyCode);

        $isOnECommerce = Configuration::where('config_key', Configuration::CONFIG_KEYS['E-COMMERCE'])->where('is_published', true)->select('configurations.*',"title_$language as title")->first();
        if(!empty($isOnECommerce) && $isOnECommerce->config_value==1) {
            return view('user.shoes_style_detail.index', compact('shoesStyleDetail','shoes_type_slug', 'shoesStyle_name', 'shoesType', 'relatedProduct', 'indiegogoLink', 'shoeSizes','sizeDefaultId','sizeDefaultValue','currencyCode','exchangeRate'));
        }
        return view('user.shoes_style_detail.index_off_e_commerce', compact('shoesStyleDetail','shoes_type_slug', 'shoesStyle_name', 'shoesType', 'relatedProduct', 'indiegogoLink', 'shoeSizes'));
        
    }
}
