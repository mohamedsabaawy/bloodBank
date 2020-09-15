<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace'=>'Api' , 'prefix'=>'v1'],function (){
    Route::post('register','ClientController@register');
    Route::post('reset','ClientController@reset');
    Route::post('newpassword','ClientController@newPassword');
    Route::post('login','ClientController@login');
    Route::post('cities','CityController@Store');
    Route::get('cities/all','CityController@Index');
    Route::get('governorate/all','GovernorateController@Index');
    Route::post('governorate','GovernorateController@Store');
    Route::post('blood-type','BloodTypeController@Store');
    Route::get('blood-type/all','BloodTypeController@Blood');
    Route::get('post/all','PostController@Post');
    Route::post('post','PostController@Store');
    Route::get('donation/all','DonationController@index');
});
