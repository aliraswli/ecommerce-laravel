<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Redirect authenticated users to the dashboard, unauthenticated to login
Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

Route::get("logout", [LogoutController::class, "logout"])->name("logout");
Route::middleware('guest')->group(function () {
    Route::get("login", [LoginController::class, "index"])->name("login.index");
    Route::post("login", [LoginController::class, "post"])->name("login.post");

    Route::get("register", [RegisterController::class, "index"])->name("register.index");
    Route::post("register", [RegisterController::class, "post"])->name("register.post");
});


Route::get("dashboard", [DashboardController::class, "index"])->name("dashboard");

Route::prefix("account")->as("account.")->middleware("auth")->group(function () {

});

Route::prefix('cart')->as('cart.')->middleware("auth")->group(function () {
    Route::get("/", [CartController::class, "index"])->name("index");

    Route::post('/{id}/increment', [CartController::class, 'increment'])->name('increment');
    Route::post('/{id}/decrement', [CartController::class, 'decrement'])->name('decrement');
});

Route::prefix('checkout')->as('checkout.')->middleware("auth")->group(function () {
    Route::get("/", [CheckoutController::class, "index"])->name("index");
});
