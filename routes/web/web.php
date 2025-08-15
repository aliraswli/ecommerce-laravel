<?php

use App\Http\Controllers\Account\FavoriteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\OrderController;
use App\Http\Controllers\Account\AddressController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Product\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect root to dashboard
Route::redirect('/', '/dashboard')->name('home');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Account
    Route::prefix('account')->as('account.')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('index');
        Route::post('/', [AccountController::class, 'post'])->name('post');
    });

    // Orders
    Route::prefix('orders')->as('orders.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
    });

    // Address
    Route::prefix('address')->as('address.')->group(function () {
        Route::get('/', [AddressController::class, 'index'])->name('index');
        Route::get('/create', [AddressController::class, 'create'])->name('create');
        Route::post('/store', [AddressController::class, 'store'])->name('store');
    });

    // Cart
    Route::prefix('cart')->as('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/{id}/increment', [CartController::class, 'increment'])->name('increment');
        Route::post('/{id}/decrement', [CartController::class, 'decrement'])->name('decrement');
    });

    // Payment
    Route::prefix('payment')->as('payment.')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('index');
        Route::post('/', [PaymentController::class, 'post'])->name('process');
    });
});

/*
|--------------------------------------------------------------------------
| Public Static Pages
|--------------------------------------------------------------------------
*/
Route::prefix('static')->as('static.')->group(function () {
    Route::view('/about-us', 'web.static.about-us')->name('about-us');
});

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/
Route::prefix('product')->as('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{id}', [ProductController::class, 'show'])->name('details');
});

Route::post('/favorite', [FavoriteController::class, 'post'])->name('favorite');
