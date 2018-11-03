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
/*

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index')->name('welcome');

Route::post('/reservation', 'ReservationController@reserve')->name('reservation');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


/*

Route::get('admin/dashboard', function(){
    return view('admin.dashboard');
});

*/

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'admin'], function(){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider', 'SliderController');
    Route::resource('category', 'CategoryController');
    Route::resource('item', 'ItemController');
    Route::get('reservation', 'ReservationController@index')->name('reservation.index');
});

Route::get('/temp', 'HomeController@temp');