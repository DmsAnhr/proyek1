<?php

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/shop', function() {
    return view('user.shop');
});;

Route::get('/about', function() {
    return view('user.about');
});;

Route::get('/gallery', function() {
    return view('user.galery');
});;

Route::get('/news', function() {
    return view('user.news');
});;

Route::get('/contact', function() {
    return view('user.contact');
});;

Auth::routes();

