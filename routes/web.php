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
Route::post('/contact', 'ContactController@sendMessage')->name('contact');

Auth::routes();

Route::get('/email/confirm/{token}', 'Admin\AdminController@confirm')->name('confirm');
Route::post('/email/confirm/{token}', 'Admin\AdminController@password')->name('setpassword');

// Route::get('/home', 'HomeController@index')->name('home');


/*

Route::get('admin/dashboard', function(){
    return view('admin.dashboard');
});

*/

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'admin'], function(){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('admin', 'AdminController');
    Route::resource('slider', 'SliderController');
    Route::resource('category', 'CategoryController');
    Route::resource('item', 'ItemController');
    Route::resource('haveslider', 'HaveALookSliderController');
    Route::resource('menucategory', 'MenuCategoryController');
    Route::resource('featureddish', 'FeaturedDishController');
    Route::post('featureddish/status/{id}', 'FeaturedDishController@status')->name('featureddish.status');
    Route::post('featureddish/unstatus/{id}', 'FeaturedDishController@unstatus')->name('featureddish.unstatus');
    Route::get('reservation', 'ReservationController@index')->name('reservation.index');
    Route::post('reservation/{id}', 'ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}', 'ReservationController@destroy')->name('reservation.destroy');

    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::get('contact/{id}', 'ContactController@show')->name('contact.show');
    Route::delete('contact/{id}', 'ContactController@destroy')->name('contact.destroy');

    Route::resource('about', 'AboutController');
    Route::resource('beer', 'BeerController');
    Route::resource('bread', 'BreadController');
    Route::resource('social', 'SocialController');
    Route::resource('footer', 'FooterController');
});

Route::get('/temp', 'HomeController@temp');