<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
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

// locale
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        Session::put('locale', $locale);
        // App::setLocale($locale);         // Apply the locale immediately
        // $a = App::getLocale();
        // dd("$locale,$a");


    }
    return redirect()->back();
})->name('SwitchLang');


//         based route



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/services', function () {
    return view('services');
})->name('services');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// services

Route::get('/civil-cases', function () {
    return view('services.civil-cases');
})->name('civil-cases');

Route::get('/contracts-issues', function () {
    return view('services.contracts-issues');
})->name('contracts-issues');

Route::get('/criminal-cases', function () {
    return view('services.criminal-cases');
})->name('criminal-issues');

Route::get('/family-law', function () {
    return view('services.family-law');
})->name('family-law');

Route::get('/labour-issues', function () {
    return view('services.labour-issues');
})->name('labour-issues');

Route::get('/legal-representation', function () {
    return view('services.legal-representation');
})->name('legal-representation');

Route::get('/real-estate-issues', function () {
    return view('services.real-estate-issues');
})->name('real-estate-issues');




//  partners

Route::get('/partners/first', function () {
    return view('partners.first');
})->name('partners-first');


Route::get('/partners/second', function () {
    return view('partners.second');
})->name('partners-second');

Route::get('/partners/third', function () {
    return view('partners.third');
})->name('partners-third');


Route::get('/partners/forth', function () {
    return view('partners.forth');
})->name('partners-forth');

Route::get('/partners/fifth', function () {
    return view('partners.fifth');
})->name('partners-fifth');


