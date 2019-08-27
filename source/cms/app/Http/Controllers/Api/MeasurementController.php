<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Order;
use App\Models\Measurement;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterToMail;
use Log;
use Session;
use App;
use App\Mail\SendProfileAPIToMail;
use App\Jobs\downloadFeetImage;
use Queue;

class MeasurementController extends Controller
{
    public function emailExist(Request $request)
    {
        $headers = apache_request_headers();
        if(empty($headers['language'])){
            $headers['language'] = App::getLocale();
        }
        $language = $headers['language'];
        Session::put('lang',$language);
        App::setLocale($language);

        $success = false;
        $orders = [];
        $user_status = 0;
        $message = "";

        //---------------------------------------------------
        // STEP 1: validate data
        //---------------------------------------------------
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:50',
        ]);

        if ($validator->fails()) {

            $message =  @trans('errors.common.api_invalid_input_data');

        }else{
            //---------------------------------------------------
            // STEP 2: check email is exists and get orders
            //---------------------------------------------------
            try{
                $user = User::where('email', '=', $request['email'])->first();

                if($user != null) {
                    $user_status = $user->email_verified ? 2 : 1;
                    $orders = Order::where('owner_id', $user->id)->get();
                }

                else {
                    $user = User::create([
                        'full_name' => '',
                        'email' => $request['email'],
                        'password' => bcrypt($request['email']),
                        'email_verify_sent_at' => Carbon::now(),
                    ]);
                }

                $success = true;

            }catch(Exception $ex){
                $message = $ex->getMessage();
            }
        }

        return response()->json([
            'success' => $success,
            'orders' => $orders,
            'user_status' => $user_status,
            'message' => $message,
        ]);
    }

    /**
     * Check profile validation and return web link profile
     *
     */
    public function index(Request $request)
    {
        $headers = apache_request_headers();
        if(empty($headers['language'])){
            $headers['language'] = App::getLocale();
        }
        $language = $headers['language'];
        Session::put('lang',$language);
        App::setLocale($language);

        $succeed = true;
        $error = "";
        $order = [];
        $user_status = 0;
        $browser_url = env('BROWSER_URL');
        //if($language == "vi"){
        //    $browser_url = env('BROWSER_URL').$language;
        //}

        //---------------------------------------------------
        // STEP 1: validate data
        //---------------------------------------------------

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'height' => 'nullable|numeric',
            'height_unit' => 'nullable|in:inch,cm',
            'weight' => 'nullable|numeric',
            'weight_unit' => 'nullable|in:kg,pound',
            'race' => 'nullable',
            'gender' => 'nullable',
            'date_of_birth' => 'nullable|date',
            'left.foot_length' => 'required|numeric|max:1500',
            'left.toes_girth' => 'required|numeric',
            'left.ball_girth' => 'required|numeric',
            'left.ball_width' => 'required|numeric',
            'left.instep_height' => 'required|numeric',
            'right.foot_length' => 'required|numeric|max:1500',
            'right.toes_girth' => 'required|numeric',
            'right.ball_girth' => 'required|numeric',
            'right.ball_width' => 'required|numeric',
            'right.instep_height' => 'required|numeric',
            'code' => 'required'
        ]);
        if( $validator->fails() )
            return response()->json([
                'success' => false,
                'browser_url' => $browser_url,
            ]);

        DB::transaction(function () use ($request, &$order, &$succeed, &$error, &$user_status, $browser_url) {

            try {
                //---------------------------------------------------
                // STEP 2: find user and create user if it isn't exists
                //---------------------------------------------------

                $user = User::where('email', '=', $request['email'])->first();

                if($user == null) {
                    $user = User::create([
                        'full_name' => '',
                        'email' => $request['email'],
                        'password' => bcrypt($request['email']),
                        'birth_date' => $request['date_of_birth'],
                        'email_verify_sent_at' => Carbon::now(),
                    ]);
                    
                }
                if (!empty($request['date_of_birth'])){
                    $user->birth_day = $request['date_of_birth'];
                    $user->save();
                }
                //---------------------------------------------------
                // STEP 3: create new measurement
                //---------------------------------------------------
                
                $platform = isset($request['platform'])?$request['platform']:'';
                $measurementData = [
                    'user_id' => $user->id,
                    'email' => $request['email'],
                    'height' => $request['height'],
                    'height_unit' => $request['height_unit'],
                    'weight' => $request['weight'],
                    'weight_unit' => $request['weight_unit'],
                    'race' => $request['race'],
                    'gender' => $request['gender'],
                    'date_of_birth' => $request['date_of_birth'],
                    'left_foot_length' => $request['left']['foot_length'],
                    'left_toes_girth' => $request['left']['toes_girth'],
                    'left_ball_girth' => $request['left']['ball_girth'],
                    'left_ball_width' => $request['left']['ball_width'],
                    'left_instep_height' => $request['left']['instep_height'],
                    'right_foot_length' => $request['right']['foot_length'],
                    'right_toes_girth' => $request['right']['toes_girth'],
                    'right_ball_girth' => $request['right']['ball_girth'],
                    'right_ball_width' => $request['right']['ball_width'],
                    'right_instep_height' => $request['right']['instep_height'],
                    'code' => $request['code'],                    
                    'platform' => $platform
                ];

                $measurement = Measurement::create($measurementData);

                //---------------------------------------------------
                // STEP 4: update measurement_id if exist order
                //---------------------------------------------------

                $order = Order::where('email', '=', $request['email'])
                    ->where('measurement_id', null)
                    ->orderBy('updated_at', 'desc')->first();

                if ($order) {
                    $order->measurement_id = $measurement->id;
                    if($order->status == Order::STATUS['CONFIRM'])
                        $order->status = Order::STATUS['MEASUREMENT UPLOADED'];// sent measurement
                    $order->save();
                }
                
                //Call thirt party (avatar3d) to get 6 image 
                
                Log::error("downloadFeetImage");        
                dispatch(new downloadFeetImage($request['code'],$platform));

            } catch (Exception $e) {
                $succeed = false;
                $error = $e;
            }
        });

        return response()->json([
            'success' => $succeed,
            'browser_url' => $browser_url,
        ]);
    }


}
