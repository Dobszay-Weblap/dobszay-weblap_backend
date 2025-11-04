<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EtelController;
use App\Http\Controllers\FamilydataController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\KorabbiEvController;

use App\Http\Controllers\FoglaltsagController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SzabalyController;


Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::post('/reset-password', [ResetPasswordController::class, 'reset']);


Route::middleware('auth:sanctum')->group(function () {
    // User adatok
    Route::get('/user', function (Request $request) {
        return response()->json([
            'user' => $request->user()->load('csoportok')
        ]);
    });
    
    // Kijelentkezés
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

    Route::get('/menus', [MenuController::class, 'index']);
    Route::post('/menus', [MenuController::class, 'store']);
    Route::put('/menus/{menu}', [MenuController::class, 'update']);

    Route::get('/etelek', [EtelController::class, 'index']);
    Route::put('/etelek/{etel}', [EtelController::class, 'update']);
});


Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getUser']);

Route::middleware(['auth:sanctum', Admin::class])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
});


    // Csoport kezelés
   /*  Route::get('/csoportok', function () {
        return Csoport::all();
    }); */



Route::apiResource('/csaladi-adatok', FamilydataController::class);
Route::get('/csaladi-adatok', [FamilyDataController::class, 'index']);
Route::post('/csaladi-adatok', [FamilyDataController::class, 'store']);
Route::get('/csaladi-adatok/{id}', [FamilyDataController::class, 'show']);
Route::put('/csaladi-adatok/{id}', [FamilyDataController::class, 'update']);
Route::delete('/csaladi-adatok/{id}', [FamilyDataController::class, 'destroy']);

Route::get('/csaladi-adatok/{id}/gyerekek', [FamilyDataController::class, 'children']);

Route::get('/szabalyok', [SzabalyController::class, 'index']);    











  




    
Route::get('/insert-test-data', [KorabbiEvController::class, 'insertTestData']);

    
Route::get('/foglaltsag', [FoglaltsagController::class, 'index']);
Route::post('/foglaltsag/hozzad', [FoglaltsagController::class, 'hozzad'])->middleware('auth:sanctum');



Route::get('/korabbiev/{year}', [KorabbiEvController::class, 'getDataByYear']);



Route::get('/test', function () {
    return response()->json(['message' => 'A backend működik!']);
});

Route::get('/csaladi-adatok/{id}/gyerekek', [FamilyDataController::class, 'children']);


Route::get('/videos', function () {
    $files = File::files(public_path('videok')); // A 'videok' mappa fájljai
    $videos = collect($files)->map(function ($file) {
        return url('videok/' . $file->getFilename()); // Generálja az URL-t
    });

    return response()->json($videos);
});

Route::get('/images', function () {
    $files = File::files(public_path('kepek')); // A 'kepek' mappa fájljai
    $images = collect($files)->map(function ($file) {
        return url('kepek/' . $file->getFilename()); // Generálja az URL-t
    });

    return response()->json($images);
});

Route::get('rooms', [RoomController::class, 'index']);
Route::get('rooms/{id}', [RoomController::class, 'show']);
Route::post('rooms', [RoomController::class, 'store']);
Route::put('rooms/{id}', [RoomController::class, 'update']);
Route::delete('rooms/{id}', [RoomController::class, 'destroy']);
