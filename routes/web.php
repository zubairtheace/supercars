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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::get('/our-cars', 'HomeController@ourcars');
//
Route::get('/contact-us', 'HomeController@contactus');
//
// Route::get('/frequently-asked-questions', 'HomeController@frequentlyaskedquestions');

Route::get('/admin', 'HomeController@admin');

Route::resource('/management/color', 'Management\ColorController');

Route::resource('/management/make', 'Management\MakeController');

Route::resource('/management/faq', 'Management\FaqController');

Route::resource('/management/car', 'Management\CarController');

// Route::get('/management/car/quotation/{id}', 'Management\CarController@quotation');

Route::resource('/footer_contact_info', 'Footer_contact_infoController');

Route::resource('/footer_opening_hour', 'Footer_opening_hourController');

Route::resource('/user', 'UserController');

Route::resource('/quotation', 'QuotationController');

Route::get('/quotation/create/{id?}', 'QuotationController@create');
