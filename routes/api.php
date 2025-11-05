<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BeallitasController;
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
use App\Models\Csoportok;

Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::post('/reset-password', [ResetPasswordController::class, 'reset']);

// Normál bejelentkezett felhasználók
Route::middleware('auth:sanctum')->group(function () {
    // User adatok
    Route::get('/user', function (Request $request) {
        return response()->json([
            'user' => $request->user()->load('csoportok')
        ]);
    });

    // Kijelentkezés
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

    // Csoportok lekérése - minden bejelentkezett user számára
    Route::get('/csoportok', function () {
        return Csoportok::all();
    });

    //Menük
    Route::get('/menus', [MenuController::class, 'index']);
    Route::post('/menus', [MenuController::class, 'store']);
    Route::put('/menus/{menu}', [MenuController::class, 'update']);

    //Étel kiosztás
    Route::get('/etelek', [EtelController::class, 'index']);
    Route::put('/etelek/{etel}', [EtelController::class, 'update']);

    //Családi adatok
    Route::get('/csaladi-adatok', [FamilyDataController::class, 'index']);
    Route::post('/csaladi-adatok', [FamilyDataController::class, 'store']);
    Route::get('/csaladi-adatok/{id}', [FamilyDataController::class, 'show']);
    Route::put('/csaladi-adatok/{id}', [FamilyDataController::class, 'update']);
    Route::delete('/csaladi-adatok/{id}', [FamilyDataController::class, 'destroy']);
});


Route::post('/kezdo-datum', [MenuController::class, 'updateKezdoDatum']);
Route::get('/kezdo-datum', [MenuController::class, 'getKezdoDatum']);


Route::get('/beallitas/kezdo-datum', [BeallitasController::class, 'getKezdoDatum']);
Route::post('/beallitas/kezdo-datum', [BeallitasController::class, 'setKezdoDatum']);


Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getUser']);

Route::middleware(['auth:sanctum', Admin::class])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
});


/* Route::middleware(['auth:sanctum'])->get('/csoportok', function () {
    return Csoportok::all();
}); */

// Admin végpontok - csak adminoknak
// Admin végpontok - csak adminoknak
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{user}/csoportok', [UserController::class, 'updateCsoportok']);
    
    // Új csoport létrehozása
    Route::post('/csoportok', function(Request $request) {
        $validated = $request->validate([
            'nev' => 'required|string|max:255|unique:csoportoks,nev'
        ]);
        
        $csoport = Csoportok::create($validated);
        
        return response()->json($csoport, 201);
    });
});






Route::get('/csaladi-adatok/{id}/gyerekek', [FamilyDataController::class, 'children']);

Route::get('/szabalyok', [SzabalyController::class, 'index']);

Route::get('/foglaltsag', [FoglaltsagController::class, 'index']);
Route::post('/foglaltsag/hozzad', [FoglaltsagController::class, 'hozzad'])->middleware('auth:sanctum');


Route::get('rooms', [RoomController::class, 'index']);
Route::get('rooms/{id}', [RoomController::class, 'show']);
Route::post('rooms', [RoomController::class, 'store']);
Route::put('rooms/{id}', [RoomController::class, 'update']);
Route::delete('rooms/{id}', [RoomController::class, 'destroy']);















Route::get('/insert-test-data', [KorabbiEvController::class, 'insertTestData']);






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
