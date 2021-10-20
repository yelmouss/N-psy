<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\StripePaymentController;
 
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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



// Route::get('uploadVideo', [VideoController::class , 'index'])->name('');
Route::get('/Video', [VideoController::class, 'AddVideo']);
Route::post('/Video', [VideoController::class , 'StoreVideo'])->name('videos.uploadVideo');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/candidature', [CandidatureController::class, 'index'])->name('candidature');

Route::get('/administrator', [AdminController::class, 'index'])->name('administrator');
Route::resource('User', AdminController::class);
  

Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');



Auth::routes();