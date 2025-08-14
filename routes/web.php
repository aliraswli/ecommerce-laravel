<?php

use App\Http\Controllers\Account\AddressController;
use App\Http\Controllers\Account\OrderController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Payment\PaymentController;
use Illuminate\Support\Facades\Route;

// Redirect authenticated users to the dashboard, unauthenticated to login
Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::get("dashboard", [
    DashboardController::class, "index"
])->name("dashboard");

Route::get("logout", [LogoutController::class, "logout"])->name("logout");
Route::middleware('guest')->group(function () {
    Route::get("login", [LoginController::class, "index"])->name("login.index");
    Route::post("login", [LoginController::class, "post"])->name("login.post");

    Route::get("register", [RegisterController::class, "index"])->name("register.index");
    Route::post("register", [RegisterController::class, "post"])->name("register.post");
});

/* All routes that require authentication */
Route::middleware('auth')->group(function () {
    /* Account and Update Profile Routes */
    Route::prefix("account")->as("account.")->group(function () {
        Route::get("/", [AccountController::class, "index"])->name("index");
        Route::post("post", [AccountController::class, "post"])->name("post");
    });

    /* Orders Routes */
    Route::prefix("orders")->as("orders.")->group(function () {
        Route::get("/", [OrderController::class, "index"])->name("index");
    });

    /* Addresses Routes */
    Route::prefix("address")->as("address.")->group(function () {
        Route::get("/", [AddressController::class, "index"])->name("index");
        Route::get("create", [AddressController::class, "create"])->name("create");
        Route::post("store", [AddressController::class, "store"])->name("store");
    });

    /* Cart Routes */
    Route::prefix('cart')->as('cart.')->group(function () {
        Route::get("/", [CartController::class, "index"])->name("index");

        Route::post('/{id}/increment', [CartController::class, 'increment'])->name('increment');
        Route::post('/{id}/decrement', [CartController::class, 'decrement'])->name('decrement');
    });

    /* Payment */
    Route::prefix("payment")->as("payment.")->group(function () {
        Route::get("/", [PaymentController::class, "index"])->name("index");
        Route::get("post", [PaymentController::class, "post"])->name("post");
    });
});
