<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/maps', [MapController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// free download map
Route::get('/free-map', [MapController::class, 'freeMapForm']);
Route::post('/free-map-download', [MapController::class, 'downloadFree'])->name('free.map.download');

Route::get('/buy-map', [MapController::class, 'buyMapForm']);
Route::post('/buy-map-submit', [MapController::class, 'submitPayment'])->name('buy.map.submit');

Route::get('/download-paid/{id}', [MapController::class, 'downloadPaidMap'])->name('paid.map.download');