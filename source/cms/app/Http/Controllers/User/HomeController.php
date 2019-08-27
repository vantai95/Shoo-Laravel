<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\ProductFeature;
use App\Models\ShoeTypes;
use App\Models\Slider;
use App\Models\HomeHowItWork;
use Illuminate\Http\Request;
use Session;
use App;

class HomeController extends Controller
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
        $homeHowItWork = HomeHowItWork::where('is_published', true)->orderBy('id')->select(
                                    'home_how_it_works.*',
                                    "title_$language as title", 
                                    "description_$language as description"
                                )->get();
        $sliders = Slider::where('is_published', true)->orderBy('id')->select(
                                'slider.*',
                                "title_$language as title", 
                                "description_$language as description"
                            )->get();
        $shoesTypes = ShoeTypes::orderBy('index')->select(
                                    'shoe_types.*',
                                    "name_$language as name", 
                                    "description_$language as description",
                                    "description_home_$language as description_home",
                                    "description_shoe_types_$language as description_shoe_types"
                                )->get();
        $productFeatures = ProductFeature::where('is_published', true)
            ->orderBy('index')
            ->select(
                'product_feature.*',
                "title_$language as title",
                "description_$language as description"
            )->get();
        foreach ($productFeatures as &$productFeature) {
            // first get the product feature details
            $productFeatureDetails = $productFeature->productFeatureDetails();
            if (count($productFeatureDetails) == 0) {
                $link = '#';
            }else{
                $link = url('product-feature-detail', $productFeatureDetails->first()->slug);
            }
            $productFeature['link'] = $link;
        }

        $videos = Configuration::where('config_key', Configuration::CONFIG_KEYS['HOME_VIDEO'])
                                ->where('is_published', true)->orderBy('id')
                                ->select('configurations.*',"title_$language as title")
                                ->get();
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])
                                ->where('is_published', true)
                                ->select('configurations.*', "title_$language as title")
                                ->first();

        $campaignButtonStatus = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_STATUS'])->where('is_published',
        true)->select('configurations.*', "title_$language as title")->first();
        $campaignButtonValue = Configuration::where('config_key', Configuration::CONFIG_KEYS['CAMPAIGN_BUTTON_VALUE'])->where('is_published',
        true)->select('configurations.*', "title_$language as title")->first();
                             
                           
        return view('user.index', compact('homeHowItWork','sliders','shoesTypes', 'productFeatures','videos', 'indiegogoLink','campaignButtonStatus','campaignButtonValue'));
    }
    public function changeLocalization($language){
        App::setLocale($language);
        Session::put('lang', App::getLocale());       
        return redirect()->back();
    }
}
