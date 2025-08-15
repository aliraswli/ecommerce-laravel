<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

// Logout
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Authentication (Guest Only)
|--------------------------------------------------------------------------
*/
Route::prefix('auth')->as('auth.')->middleware('guest')->group(function () {
    // Login
    Route::prefix('login')->as('login.')->group(function () {
        Route::get('/', [LoginController::class, 'index'])->name('index');
        Route::post('/', [LoginController::class, 'post'])->name('post');
    });

    // Register
    Route::prefix('register')->as('register.')->group(function () {
        Route::get('/', [RegisterController::class, 'index'])->name('index');
        Route::post('/', [RegisterController::class, 'post'])->name('post');
    });
});
