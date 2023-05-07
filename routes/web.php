<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\KarierController;
use App\Http\Controllers\KategoriTokoController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PopularFiturController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TentangKamiController;
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

Route::get('/', [\App\Http\Controllers\LandingPageController::class , 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function (){
    Route::resource('banner', BannerController::class);
    Route::resource('map', MapController::class);
    Route::resource('iklan', IklanController::class);
    Route::resource('karier', KarierController::class);
    Route::resource('kategori-toko', KategoriTokoController::class);
    Route::resource('logo', LogoController::class);
    Route::resource('popular-fitur', PopularFiturController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('tentang-kami', TentangKamiController::class);
});
