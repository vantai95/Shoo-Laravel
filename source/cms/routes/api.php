<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::group(['middleware' => ['apiheader']], function () {
//
//
//});
//
//Route::group(['middleware' => ['apiheader', 'auth:api']], function () {
//
//});

Route::post('/email-existed', 'Api\\MeasurementController@emailExist');
Route::post('/send-profile', 'Api\\MeasurementController@index');