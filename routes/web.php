<?php

use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\StateController;
use App\Http\Controllers\admin\SuccessNumberController;
use App\Http\Controllers\admin\UserQuoteController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AreaController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\QuoteController;
use App\Http\Controllers\frontend\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');
//About Page
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
//Service Page
Route::get('/services', [ServiceController::class, 'index'])->name('service');
//Area Page
Route::get('/coverage-area', [AreaController::class, 'index'])->name('area');
//Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');

//Quote Page
Route::get('/get-a-quote', [QuoteController::class, 'index'])->name('quote.page');
Route::get('/fetch-states/{country_id}', [QuoteController::class, 'fetchStates'])->name('fetch.states');
Route::post('/quote-store', [QuoteController::class, 'quoteStore'])->name('quote.store');
Route::get('verify-quote/{quote}', [QuoteController::class, 'verifyQuote'])->name('verify.quote');

Route::get('verify-success', [QuoteController::class, 'success'])->name('success');


Route::get('/login', function () {
    return view('auth/login');
});
//Admin
Route::middleware('auth')->group(callback: function () {
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Contact Us
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/contact-delete/{id}', [ContactUsController::class, 'destroy'])->name('contact.destroy');

    //Country Section
    Route::get('/country-section', [CountryController::class, 'index'])->name('country.section');
    Route::post('/country-store', [CountryController::class, 'store'])->name('country.store');
    Route::put('/country-update/{id}', [CountryController::class, 'update'])->name('country.update');
    Route::get('/country-delete/{id}', [CountryController::class, 'destroy'])->name('country.destroy');

    //State Section
    Route::get('/state-section', [StateController::class, 'index'])->name('state.section');
    Route::post('/state-store', [StateController::class, 'store'])->name('state.store');
    Route::put('/state-update/{id}', [StateController::class, 'update'])->name('state.update');
    Route::get('/state-delete/{id}', [StateController::class, 'destroy'])->name('state.destroy');

    //Quote Section
    Route::get('/quote-section', [UserQuoteController::class, 'quoteSection'])->name('quote.section');
    Route::get('/quote-delete/{id}', [UserQuoteController::class, 'destroy'])->name('quote.destroy');

    //Success Number
    Route::get('/success-number-section', [SuccessNumberController::class, 'index'])->name('success.number.section');
    Route::post('/success-number-store', [SuccessNumberController::class, 'store'])->name('success.number.store');
    Route::put('/success-number-update/{id}', [SuccessNumberController::class, 'update'])->name('success.number.update');
    Route::get('/success-number-delete/{id}', [SuccessNumberController::class, 'destroy'])->name('success.number.destroy');
});
require __DIR__.'/auth.php';
