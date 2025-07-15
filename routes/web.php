<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminMapController;
use App\Http\Controllers\MapPurchaseController;
use App\Http\Controllers\MapDownloadController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/pages/maps', [MapController::class, 'mapHome'])->name('maps.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// free download map
Route::get('/free-map', [MapController::class, 'freeMapForm']);
Route::post('/free-map-download', [MapController::class, 'downloadFree'])->name('free.map.download');

Route::get('/buy-map', [MapController::class, 'buyMapForm']);
Route::post('/buy-map-submit', [MapController::class, 'submitPayment'])->name('buy.map.submit');

Route::get('/download-paid/{id}', [MapController::class, 'downloadPaidMap'])->name('paid.map.download');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('maps', AdminMapController::class)->names([
        'index' => 'admin.maps.index',
        'create' => 'admin.maps.create',
        'store' => 'admin.maps.store',
        'destroy' => 'admin.maps.destroy',
    ]);
});

// Route::get('/home', function () {
//     return view('home'); // resources/views/home.blade.php
// })->middleware(['auth']);

//Only Admin Routes
Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    // Route::get('/maps', function () {
    //     return view('admin.maps.index'); // admin dashboard
    // });
     Route::get('/maps', [MapController::class, 'adminIndex'])->name('maps.index');
});
//Protect User Dashboard 
// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/dashboard', function () {
//         return view('user.dashboard');
//     });
// });

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::get('/admin/maps', [MapController::class, 'index'])->middleware(['auth', 'admin']);

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/maps', [MapController::class, 'index'])->name('admin.maps.index');
});

//buy map routes
Route::get('/buyMap', fn() => view('buyMap'));
Route::post('/buyMap', [MapPurchaseController::class, 'submit'])->name('buy.map.submits');
// Route::post('/buy-map', [MapPurchaseController::class, 'submitPayment'])->name('buy.map.submits');
Route::get('/admin/approve/{id}', [MapPurchaseController::class, 'approve'])->name('maps.approve');
Route::get('/download/map/{id}', [MapPurchaseController::class, 'download'])->name('maps.download');
Route::post('/buyMap', [MapPurchaseController::class, 'submitPayment'])->name('buyMap');
Route::get('/download/map/{file}', [MapDownloadController::class, 'download'])->middleware('signed')->name('map.download');

Route::get('/send-test-receipt', function () {
    $controller = new \App\Http\Controllers\PaymentController;
    return $controller->sendPaymentReceipt('customer@gmail.com', 'Mg Mg', 2000);
});

Route::get('download/map/{id}', [MapDownloadController::class, 'download']);
//email test route
// Route::get('/test-mail', function () {
//     Mail::raw('This is a test email from DPS Map.', function ($message) {
//         $message->to('e667479@gmail.com') // <-- ကိုယ့် Gmail သုံး
//                 ->subject('Test Email');
//     });

//     return 'Email sent!';
// });