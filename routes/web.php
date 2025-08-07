<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Redirect authenticated users to the dashboard, unauthenticated to login
Route::get('/', function () {
    return redirect()->route('user.dashboard');
})->name('home');

Route::prefix('auth')->as('auth.')->middleware('guest')->group(function () {
    Route::get("login", [LoginController::class, "index"])->name("login");
    Route::post("login", [LoginController::class, "post"])->name("login.post");

    Route::get("register", [RegisterController::class, "index"])->name("register");
    Route::post("register", [RegisterController::class, "post"])->name("register.post");
});

Route::get("logout", [LogoutController::class, "logout"])->name("logout");

Route::get("dashboard", [DashboardController::class, "index"])->name("user.dashboard");
