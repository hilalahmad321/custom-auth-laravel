<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::post("/admin/add_admin", [RegisterController::class, "add_admin"])->name("auth.add_admin");
Route::post("/admin/login", [loginController::class, "loggined"]);


Route::group(["middleware"=>"AuthCheck"], function () {
Route::get("/admin/register", [RegisterController::class, "create"])->name("auth.create");
Route::get("/admin/login", [loginController::class, "login"])->name("auth.login");

    Route::get("/dashboard", [MainController::class, "dashboard"])->name("dashboard");
    Route::get("/logout", [LogoutController::class, "logout"])->name("auth.logout");
});