<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// routes/api.php
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user(); // Visszaadjuk a bejelentkezett felhasználó adatokat
});


// routes/api.php
Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getUser']);


Route::post('/login',[AuthenticatedSessionController::class, 'store']);

Route::middleware(['auth:sanctum'])
->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // Kijelentkezés útvonal
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});


Route::middleware(['auth:sanctum', Admin::class])
->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
});
