<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BarangController;

use App\Http\Controllers\KarierController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\KategoriTokoController;
use App\Http\Controllers\PopularFiturController;

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

Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index']);

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function () {
    Route::resource('banner', BannerController::class);
    Route::resource('map', MapController::class);
    Route::resource('iklan', IklanController::class);
    Route::resource('karier', KarierController::class);
    Route::resource('kategori-toko', KategoriTokoController::class);
    Route::resource('popular-fitur', PopularFiturController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('tentang-kami', TentangKamiController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('transaksi', TransaksiController::class);
});
