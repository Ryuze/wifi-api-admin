<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\WifiController;
use App\Http\Resources\WifiResource;
use App\Models\Wifi;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::resource('/wifi', WifiController::class);

        Route::resource('/location', LocationController::class);
    });
});

Route::get('/api/wifi', function () {
    return WifiResource::collection(Wifi::all());
});

require __DIR__.'/auth.php';
