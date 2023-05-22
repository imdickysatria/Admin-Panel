<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\KarierController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\KategoriTokoController;
use App\Http\Controllers\PopularFiturController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();

Route::prefix('dashboard')->group(function (){
    Route::resource('banner', BannerController::class);
    Route::resource('map', MapController::class);
    Route::resource('iklan', IklanController::class);
    Route::resource('karier', KarierController::class);
    Route::resource('kategori-toko', KategoriTokoController::class);
    Route::resource('popular-fitur', PopularFiturController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('tentang-kami', TentangKamiController::class);
});
