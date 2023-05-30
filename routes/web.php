<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RentalController;
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
Route::get('/get-user-id', function () {
    $userId = auth()->id();
    return response()->json(['user_id' => $userId]);
});

Route::get('/', [RentalController::class, 'index']);
Route::get('/rental', [RentalController::class, 'index']);
Route::get('/barangRental', [RentalController::class, 'getDataBarang']);
Route::get('/barangShop', [ShopController::class, 'getDataBarang']);

Route::get('/cartData', [RentalController::class, 'showCart']);
Route::post('/add-to-cart', [RentalController::class, 'addToCart']);
Route::post('/dec-item-cart', [RentalController::class, 'decCart']);

Route::get('/aboutRental', function() {
    return view('rental.about');
});;
Route::get('/shopRental', function() {
    return view('rental.shop');
});;
Route::get('/cart', function() {
    return view('rental.cart');
});;
Route::get('/blogRental', function() {
    return view('rental.blog');
});;
Route::get('/contactRental', function() {
    return view('rental.contact');
});;
Route::get('/singleRental', function() {
    return view('rental.singe_shop');
});;
Route::get('/checkoutRental', function() {
    return view('rental.checkout');
});;
Route::get('/payRental', function() {
    return view('rental.pay');
});;




Route::get('/', [RentalController::class, 'index']);



Route::get('/home', [HomeController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

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

Route::get('/shop/single_shop/{id}', [ShopController::class, 'getBarangId']);

Route::middleware(['auth', 'role:user'])->group(function()
{

});




Route::middleware(['auth', 'role:admin'])->group(function()
{
    // Route::get('/', [AdminController::class, 'index']);
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

    Route::get('/penyewaan', [ShopController::class, 'indexAdmin']);
    Route::get('/riwayat', [ShopController::class, 'indexRiwayat']);
    Route::get('/get-transaksi', [ShopController::class, 'getData']);
    Route::get('/get-riwayat', [ShopController::class, 'getRiwayat']);
    Route::post('/transaksi-update/{id}', [ShopController::class, 'update']);
    Route::post('/checkout-kasir', [ShopController::class, 'store']);

    Route::get('/kategori', function() {
        return view('admin.category');
    });;
    Route::post('/make_kategori', [KategoriController::class, 'store']);
    Route::get('/get_kategori', [KategoriController::class, 'index']);

});