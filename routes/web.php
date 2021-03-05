<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PayPalPaymentController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;


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

// Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

// Route::get('withdraw', [StripePaymentController::class, 'withdraw']);
Route::post('stripeWithdraw', [StripePaymentController::class, 'stripeWithdraw'])->name('stripe.withdraw');


// Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [PayPalController::class, 'cancel'])->name('payment.cancel');
// Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');

// Route::get('paypal', [PayPalPaymentController::class, 'paypal'])->name('paypal');
// Route::get('handle-payment', [PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
// Route::get('cancel-payment', [PayPalPaymentController::class, 'paymentCancel'])->name('cancel.payment');
// Route::get('payment-success', [PayPalPaymentController::class, 'paymentSuccess'])->name('success.payment');


Route::get('/', [TemplateController::class, 'index'])->name('index');
Route::get('/live_events_community', [TemplateController::class, 'live_events_community'])->name('live_events_community');
Route::get('/live_events_professional', [TemplateController::class, 'live_events_professional'])->name('live_events_professional');
Route::get('/livestream', [TemplateController::class, 'livestream'])->name('livestream');
// Route::get('/login', [TemplateController::class, 'login'])->name('login');
Route::get('/signupPro', [TemplateController::class, 'signupPro'])->name('signupPro');
Route::get('/profile', [TemplateController::class, 'profile'])->name('profile');
// ->middleware('auth');

// Authentication Routes...



Route::prefix('admin')->group(function() {
    Route::get('/', [TemplateController::class, 'admin'])->middleware(['auth', 'admin'])->name('admin');
    Route::resource('categories', CategoryController::class);
    Route::resource('languages', LanguageController::class);
    Route::resource('events', EventController::class);
    Route::resource('users', UserController::class);
    Route::post('users/{user}/confirm', [UserController::class, 'confirm'])->name('users.confirm');
    
});

Route::post('/watchlist', [TemplateController::class, 'watchlist'])->name('watchlist');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
