<?php

namespace App\Http\Controllers\User;

use App\Mail\PreOrderToMail;
use App\Models\Page;
use App\Models\PreOrder;
use App\Models\ProductPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Torann\GeoIP\Facades\GeoIP;
use App\Models\Configuration;
use Session;
use App;
class IndiegogoController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {
       
        $language = Session::get('lang');        
        App::setLocale($language);
        $indiegogo = Page::where("page_name_$language", Page::CONSTANTS['INDIEGOGO'])->select('pages.*',"page_name_$language as page_name")->firstOrFail();
       
        $video = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['VIDEO'])->select('pages_meta.*', "value_$language as value")->first();
//        $details = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['DETAIL'])
//            ->where('available',true)->get();
        $title = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['TITLE'])->select('pages_meta.*', "value_$language as value")->first();

        $details = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['DETAIL'])->select('pages_meta.*', "value_$language as value")->first();

        $description = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['DESCRIPTION'])->select('pages_meta.*', "value_$language as value")->first();

        $facebook = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['FACEBOOK'])->select('pages_meta.*', "value_$language as value")->first();

        $youtube = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['YOUTUBE'])->select('pages_meta.*', "value_$language as value")->first();

        $ratings = $indiegogo->meta()->where('key', \App\Models\PageMeta::CONSTANTS['RATINGS'])->select('pages_meta.*', "value_$language as value")->first();

//        $packages = ProductPackage::where('available', true)->take(4)->get();
        $packages = ProductPackage::where('available', true)->orderBy('index', 'desc')
                                    ->select('product_packages.*',"description_$language as description","name_$language as name")
                                    ->get();

        $recaptchaKey = env('RECAPTCHA_KEY');

        $client_ip = $request->ip();
        $validatorIp = Validator::make($request->all(), [
            $client_ip => 'nullable|ip',
        ]);

        $iso_code = "vn";
        if(!$validatorIp->fails()) {
            $location = GeoIP::getLocation($client_ip);
            $iso_code = strtolower($location->getAttribute('iso_code'));
        }

        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();

        return view('user.indiegogo.index', compact('indiegogo', 'video', 'details', 'packages', 'title', 'description', 'facebook', 'youtube', 'ratings', 'recaptchaKey', 'iso_code', 'indiegogoLink'));
    }

    public function preOrder(Request $request)
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        $validatorInfo = Validator::make($request->all(), [
            'id' => 'required|exists:product_packages',
            'name' => 'required|string|regex:/^[\pL\s\-]+$/u|max:25',
            'email' => 'required|email|max:40',
            'phone' => 'required|regex:/\+?[0-9]+$/|max:12',
        ]);

        $validatorCaptcha = Validator::make($request->all(), [
            'g-recaptcha-response'=>'required|recaptcha',
        ]);

        if ($validatorInfo->fails()) {
            return response()->json([
                'errors' => @trans('pages.indiegogo.invalid_input'),
                'status' => 400
            ], 200);
        }

        else if ($validatorCaptcha->fails()) {
            return response()->json([
                'errors' => @trans('pages.indiegogo.invalid_captcha'),
                'status' => 400
            ], 200);
        }

        else {
            $requestData = $request->all();
            unset($requestData['id']);
            $requestData['package_id'] = $request->id;
            //$requestData['phone'] = $requestData['phone_number'];
            $preOrder = PreOrder::create($requestData);

            Mail::to($request)->send(new PreOrderToMail($request));

            return response()->json([
                'messages' => @trans('pages.indiegogo.pre_order_successful'),
                'status' => 200
            ], 200);
        }

    }

    public function thankYou(Request $request)
    {
        $language = Session::get('lang');        
        App::setLocale($language);
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->select('configurations.*',"title_$language as title")->first();
        return view('user.indiegogo.thank_you', compact('indiegogoLink'));
    }

}
