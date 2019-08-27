<?php

namespace App\Http\Controllers\User;

use App\Models\ProductFeature;
use App\Models\ProductFeatureDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Session;
use App;

class ProductFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $id)
    {        
        $language = Session::get('lang');        
        App::setLocale($language);
        $perPage = config('constants.PAGE_SIZE');
        $productFeature = ProductFeature::select(
                            'product_feature.*',
                            "title_$language as title", 
                            "description_$language as description"
                        )->findOrFail($id);
        $productFeatureDetails = $productFeature->productFeatureDetails()->orderBy('id', 'desc')->paginate($perPage);

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('user.product_features.index',compact('productFeature', 'productFeatureDetails', 'indiegogoLink'));
    }

    /**
     * Display Product feature detail page
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProductFeatureDetail(Request $request, $slug)
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        $featureDetail = ProductFeatureDetail::where('slug', $slug)
            ->where('is_published', true)
            ->select(
                'product_feature_details.*',
                "title_$language as title", 
                "content_$language as content"
            )
            ->firstOrFail();

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();
        return view('user.product_feature_details.index', compact('featureDetail', 'indiegogoLink'));
    }
}
