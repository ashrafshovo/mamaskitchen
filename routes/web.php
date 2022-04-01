<?php

use Illuminate\Support\Facades\Route;

//Custom controller

use App\Http\Controllers\IndexController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ContactsController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\HaveALookSliderController;
use App\Http\Controllers\Admin\MenuCategoryController;
use App\Http\Controllers\Admin\FeaturedDishController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BeerController;
use App\Http\Controllers\Admin\BreadController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\FooterController;


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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [IndexController::class, 'index'])->name('welcome');

Route::post('/reservation', [ReserveController::class, 'reserve'])->name('reservation');
Route::post('/contact', [ContactsController::class, 'sendMessage'])->name('contact');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin', AdminController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('item', ItemController::class);
    Route::resource('haveslider', HaveALookSliderController::class);
    Route::resource('menucategory', MenuCategoryController::class);
    Route::resource('featureddish', FeaturedDishController::class);

    Route::post('featureddish/status/{id}', [FeaturedDishController::class, 'status'])->name('featureddish.status');
    Route::post('featureddish/unstatus/{id}', [FeaturedDishController::class, 'unstatus'])->name('featureddish.unstatus');
    Route::get('reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::post('reservation/{id}', [ReservationController::class, 'status'])->name('reservation.status');
    Route::delete('reservation/{id}', [ReservationController::class,'destroy'])->name('reservation.destroy');

    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::resource('about', AboutController::class);
    Route::resource('beer', BeerController::class);
    Route::resource('bread', BreadController::class);
    Route::resource('social', SocialController::class);
    Route::resource('footer', FooterController::class);
});
