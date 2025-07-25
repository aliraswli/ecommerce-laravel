<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("auth")->middleware("guest")->as("auth.")->group(function () {
    Route::get("login", [LoginController::class, "index"])->name("login");
    Route::post("login", [LoginController::class, "post"]);

    Route::get("login", [RegisterController::class, "index"])->name("register");
    Route::post("login", [RegisterController::class, "post"]);
});


