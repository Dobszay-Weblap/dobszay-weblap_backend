<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FamilydataController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\KorabbiEvController;


use App\Http\Controllers\FoglaltsagController;


Route::middleware(['auth:sanctum'])
     ->get('/users', [UserController::class, 'index']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/insert-test-data', [KorabbiEvController::class, 'insertTestData']);


Route::apiResource('/csaladi-adatok', FamilydataController::class);

    Route::get('/csaladi-adatok', [FamilyDataController::class, 'index']);
    Route::post('/csaladi-adatok', [FamilyDataController::class, 'store']);
    Route::get('/csaladi-adatok/{id}', [FamilyDataController::class, 'show']);
    Route::put('/csaladi-adatok/{id}', [FamilyDataController::class, 'update']);
    Route::delete('/csaladi-adatok/{id}', [FamilyDataController::class, 'destroy']);

    Route::get('/csaladi-adatok/{id}/gyerekek', [FamilyDataController::class, 'children']);

    
Route::get('/foglaltsag', [FoglaltsagController::class, 'index']);
Route::post('/foglaltsag/hozzad', [FoglaltsagController::class, 'hozzad'])->middleware('auth:sanctum');



Route::get('/korabbiev/{year}', [KorabbiEvController::class, 'show']);
// A lekérdezés a getDataByYear metódust hívja meg.
Route::get('/korabbiev/{year}', [KorabbiEvController::class, 'getDataByYear']);


Route::get('/test', function () {
    return response()->json(['message' => 'A backend működik!']);
});

Route::get('/csaladi-adatok/{id}/gyerekek', [FamilyDataController::class, 'children']);




Route::get('rooms', [RoomController::class, 'index']);
Route::get('rooms/{id}', [RoomController::class, 'show']);
Route::post('rooms', [RoomController::class, 'store']);
Route::put('rooms/{id}', [RoomController::class, 'update']);
Route::delete('rooms/{id}', [RoomController::class, 'destroy']);




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
