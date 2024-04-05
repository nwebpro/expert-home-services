<?php

use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\DashboardController;
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
Route::get('/about', [AboutController::class, 'index'])->name('about');
//Service Page
Route::get('/service', [ServiceController::class, 'index'])->name('service');
//Area Page
Route::get('/area', [AreaController::class, 'index'])->name('area');
//Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');

//Quote Page
Route::get('/quote', [QuoteController::class, 'index'])->name('quote');



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
});
require __DIR__.'/auth.php';
