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


Auth::routes();

Route::group(['middleware' => ['Lang']], function () {

    Route::get('lang/{lang}', function($lang) {

        if ($lang == 'en') {
            session()->put('lang', 'en');
        } elseif ($lang == 'ar') {
            session()->put('lang', 'ar');
        } elseif ($lang == 'ro') {
            session()->put('lang', 'ro');
        } elseif ($lang == 'tr') {
            session()->put('lang', 'tr');
        } elseif ($lang == 'pr') {
            session()->put('lang', 'pr');
        } else {
            session()->put('lang', 'en');
        }
        return redirect('/');
    });

//page route
    Route::get('/', 'PageController@index');
    Route::get('/home', 'PageController@index');
    Route::get('/index', 'PageController@index');
    Route::get('/about', 'PageController@about');
    Route::get('/contact', 'PageController@contact');
    Route::get('/trips/{id}', 'PageController@trips');
    Route::get('/visa', 'PageController@visa');
    Route::get('/tourism', 'PageController@tourism');
    Route::get('/info/{id}', 'PageController@info');
    Route::get('/programs', 'PageController@programs');
    Route::post('/msg', 'PageController@msg');
    Route::get('/medical', 'PageController@medical');
    Route::post('/tripReq', 'PageController@tripReq');
    Route::post('/eduReq', 'PageController@eduReq');
    Route::post('/visaReq', 'PageController@visaReq');
    Route::post('/planReq', 'PageController@planReq');
    Route::post('/medReq', 'PageController@medReq');

//admin Get Route
    Route::get('/siteAdmin', 'GetController@index');
    Route::get('/siteAdmin/add/{page}', 'GetController@view');
    Route::get('/siteAdmin/show/category', 'GetController@category');
    Route::get('/siteAdmin/show/trip', 'GetController@trip');
    Route::get('/siteAdmin/show/slider', 'GetController@slider');
    Route::get('/siteAdmin/show/tripSlider', 'GetController@tripSlider');
    Route::get('/siteAdmin/show/user', 'GetController@user');
    Route::get('/siteAdmin/contactMsg', 'GetController@contactMsg');
    Route::get('/siteAdmin/medicalReq', 'GetController@medicalReq');
    Route::get('/siteAdmin/educationalReq', 'GetController@educationalReq');
    Route::get('/siteAdmin/tripReq', 'GetController@tripReq');
    Route::get('/siteAdmin/planReq', 'GetController@planReq');
    Route::get('/siteAdmin/visaReq', 'GetController@visaReq');
    Route::get('/siteAdmin/siteSettings', 'GetController@siteSettings');

//admin add routes
    Route::post('/add/category', 'AddController@addCategory');
    Route::post('/add/trip', 'AddController@addTrip');
    Route::post('/add/slide', 'AddController@addSlide');
    Route::post('/add/user', 'AddController@addUser');


//admin edit routes
    Route::post('/edit/category', 'EditController@editCategory');
    Route::post('/edit/trip', 'EditController@editTrip');
    Route::post('/edit/image', 'EditController@editSlide');
    Route::post('/edit/user', 'EditController@editUser');
    Route::post('/edit/setting', 'EditController@editSetting');


//admin delete routes
    Route::get('/delete/category/{id}', 'EditController@deleteCategory');
    Route::get('/delete/trip/{id}', 'EditController@deleteTrip');
    Route::get('/delete/image/{id}', 'EditController@deleteImage');
    Route::get('/delete/user/{id}', 'EditController@deleteUser');
});



