<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function()
{
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/shop', function() {
        return view('user.shop');
    });;

    Route::get('/about', function() {
        return view('user.about');
    });;

    Route::get('/gallery', function() {
        return view('user.gallery');
    });;

    Route::get('/news', function() {
        return view('user.news');
    });;

    Route::get('/contact', function() {
        return view('user.contact');
    });;

    Route::get('/shop/single_shop', function() {
        return view('user.single_shop');
    });;

});