<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/v1/banners', [\App\Http\Controllers\WrapperController::class, 'banners'])->name('banners');
Route::get('/v2/cosmetics/br', [\App\Http\Controllers\WrapperController::class, 'cosmetics'])->name('cosmetic');
Route::get('/v1/map', [\App\Http\Controllers\WrapperController::class, 'map'])->name('map');
Route::get('fortnite-api.com/v1/playlists', [\App\Http\Controllers\WrapperController::class, 'playlist'])->name('playlist');
Route::get('/v2/shop/br', [\App\Http\Controllers\WrapperController::class, 'shop'])->name('shop');
Route::get('/user/identitas', function () {
    return[
        'code' => '0',
        'data' => [
            'npm' => '197006062',
            'nama' => 'Muhammad Ardhi Syaifuddin',
            'email' => '197006062@student.unsil.ac.id'
        ]
        ];
})-> middleware('npm'); 