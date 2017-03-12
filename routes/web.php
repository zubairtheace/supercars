<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/management/color', 'Management\ColorController');

Route::resource('/management/make', 'Management\MakeController');

Route::resource('/management/faq', 'Management\FaqController');

Route::resource('/management/car', 'Management\CarController');

Route::resource('/footer_contact_info', 'Footer_contact_infoController');

Route::resource('/footer_opening_hour', 'Footer_opening_hourController');
