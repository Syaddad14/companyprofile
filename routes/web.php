<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\BaberShop;


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
Route::get('/login', function () {
    return view('login');
});


Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard', [DashboardController::class,'index']);
    Route::resource('landingpage', LandingPageController::class);
    Route::resource('feature', FeatureController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('testimoni', TestiController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [BaberShop::class,'index']);
