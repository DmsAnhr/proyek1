<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// Route::post('/login', 'Auth\LoginController@login')->name('login');
// Route::post('/register', 'Auth\RegisterController@register')->name('register');


Route::middleware(['auth', 'role:user'])->group(function()
{
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);

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

Route::middleware(['auth', 'role:admin'])->group(function()
{
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/kasir', function() {
        return view('admin.cashier');
    });;

    Route::resource('barang', BarangController::class);
    Route::post('/make_barang', [BarangController::class, 'store']);
    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/barang/{id}', 'BarangController@show')->name('barang.show');
    Route::delete('/barang_delete/{id}', [BarangController::class, 'destroy']);

    Route::get('/get-data', [BarangController::class, 'getData']);
    // Route::get('/get-data', 'BarangController@getData');

    Route::post('/checkout-kasir', [ShopController::class, 'store']);

    Route::get('/kategori', function() {
        return view('admin.category');
    });;
    Route::post('/make_kategori', [KategoriController::class, 'store']);

});