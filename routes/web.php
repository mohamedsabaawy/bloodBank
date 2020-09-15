<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'Front',''],function (){
    Route::get('/','HomeController@index')->name('front_home');
    Route::resource('/donation','DonationController');
    Route::get('/loginForm','ClientController@loginForm')->name('front-login');
    Route::get('/registerForm','ClientController@registerForm')->name('front-register');
    Route::post('/registerForm','ClientController@register')->name('client_register');
//    Route::post('/','ClientController@register')->name('client');
    Route::post('/','ClientController@logout')->name('client_logout');
    Route::post('/loginForm','ClientController@login')->name('client-login');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','auto']],function (){
    Route::resource('governorate','GovernorateController');
    Route::resource('city','CityController');
    Route::resource('bloodType','BloodTypeController');
    Route::resource('category','CategoryController');
    Route::resource('client','ClientController');
    Route::resource('post','PostController');
    Route::resource('role','RoleController');
    Route::resource('user','UserController');
});
