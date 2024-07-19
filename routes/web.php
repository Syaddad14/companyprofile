<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\Arenzha;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AutoReplyController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProdukLayananController;
use App\Http\Controllers\TeknologiController;
use App\Http\Controllers\ClientComplaintController;
use App\Http\Controllers\ClientTrackingController;
use App\Http\Controllers\ComplaintController;

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
//     return view('BaberShopL4.index');
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
    Route::resource('client', ClientController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('testimoni', TestiController::class);
    Route::get('message', [MessageController::class,'index'])->name('message.index');
    Route::get('message/formEmail', [MessageController::class,'viewEmail'])->name('message.formEmail');
    Route::post('message/send-email', [MessageController::class, 'sendEmail'])->name('message.send.email');
    Route::delete('message/{message}', [MessageController::class, 'destroy'])->name('message.destroy');
    Route::resource('message', MessageController::class)->except(['index', 'destroy', 'sendEmail']);
    Route::post('/send-reply', [EmailController::class, 'sendReply'])->name('send.reply');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [Arenzha::class,'index']);
Route::resource('Arenzha', Arenzha::class);

Route::resource('produk-layanan', ProdukLayananController::class);
Route::resource('teknologi', TeknologiController::class);

Route::delete('message/{message}', [MessageController::class, 'destroy'])->name('message.destroy');
Route::post('message/sendReply/{id}', [MessageController::class, 'sendReply'])->name('message.sendReply');

// Added route for testing email sending
Route::get('/send-test-email', [TestEmailController::class, 'sendTestEmail']);
Route::get('/client/complain/tracking/{userId}', 'App\Http\Controllers\ClientComplaintController@showTracking')->name('client.complain.tracking');
Route::get('/client/complain/form', 'App\Http\Controllers\ClientComplaintController@showForm')->name('client.complain.form');
Route::post('/client/complain/store', 'App\Http\Controllers\ClientComplaintController@store')->name('client.complain.store');
Route::get('/complaints', [ClientComplaintController::class, 'index']);
Route::resource('complaint', ClientComplaintController::class);
Route::delete('/complaint/{complaint}', [ClientComplaintController::class, 'destroy'])->name('complaint.destroy');
Route::get('/client/tracking/form', [ClientTrackingController::class, 'showForm'])->name('client.tracking.form');
Route::get('/client/tracking/results', [ClientTrackingController::class, 'showResults'])->name('client.tracking.results');
Route::get('/tracking/{client}', [ClientTrackingController::class, 'show'])->name('tracking.show');
Route::get('/tracking-form', [ClientTrackingController::class, 'showForm'])->name('tracking.form');
Route::get('/client/{client}/complaints', [ClientTrackingController::class, 'trackComplaints'])->name('client.track.complaints');
Route::get('/client/{client}/complaints/{complaint}/respond', [ClientTrackingController::class, 'respondComplaint'])->name('client.respond.complaint');
Route::post('/client/{client}/complaints/{complaint}/respond', [ClientTrackingController::class, 'submitResponse'])->name('client.submit.response');
