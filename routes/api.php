<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EtelController;
use App\Http\Controllers\FamilyDataController;
use App\Http\Controllers\SzabalyController;
use App\Http\Controllers\FoglaltsagController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BeallitasController;
use App\Http\Middleware\Admin;
use App\Models\Csoportok;

// -------------------------
// 🔓 Publikus végpontok
// -------------------------
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::post('/reset-password', [ResetPasswordController::class, 'reset']);


// -------------------------
// 👤 Bejelentkezett felhasználók (nem kell admin)
// -------------------------
Route::middleware('auth:sanctum')->group(function () {

    // Saját felhasználói adatok
    Route::get('/user', [UserController::class, 'getUser']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

    // Csoportok megtekintése
    Route::get('/csoportok', function () {
        return Csoportok::all();
    });

    // Menük és ételek megtekintése
    Route::get('/menus', [MenuController::class, 'index']);
    Route::get('/etelek', [EtelController::class, 'index']);

    Route::get('/kezdo-datum', [MenuController::class, 'getKezdoDatum']);
    Route::get('/beallitas/kezdo-datum', [BeallitasController::class, 'getKezdoDatum']);

    // Családi adatok – minden művelet engedélyezett
    Route::get('/csaladi-adatok', [FamilyDataController::class, 'index']);
    Route::post('/csaladi-adatok', [FamilyDataController::class, 'store']);
    Route::get('/csaladi-adatok/{id}', [FamilyDataController::class, 'show']);
    Route::put('/csaladi-adatok/{id}', [FamilyDataController::class, 'update']);
    Route::delete('/csaladi-adatok/{id}', [FamilyDataController::class, 'destroy']);

    // Szabályok megtekintése
    Route::get('/szabalyok', [SzabalyController::class, 'index']);
    Route::put('/szabalyok/{id}', [SzabalyController::class, 'update']);

    Route::put('/etelek/{etel}', [EtelController::class, 'update']); 

    // Foglalások (minden, kivéve az összes törlés)
    Route::get('/foglaltsag', [FoglaltsagController::class, 'index']);
    Route::post('/foglaltsag/hozzad', [FoglaltsagController::class, 'hozzad']);
    Route::delete('/foglaltsag/torol', [FoglaltsagController::class, 'destroyLako']);

    // Szobák megtekintése
    Route::get('rooms', [RoomController::class, 'index']);
    Route::get('rooms/{id}', [RoomController::class, 'show']);
});



// -------------------------
// 🛠️ Admin jogosultságok
// -------------------------
Route::middleware(['auth:sanctum', 'admin'])->group(function () {

    // Felhasználók kezelése
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::put('/users/{user}/csoportok', [UserController::class, 'updateCsoportok']);

    // Csoport létrehozása
    Route::post('/csoportok', function (Request $request) {
        $validated = $request->validate([
            'nev' => 'required|string|max:255|unique:csoportoks,nev'
        ]);
        $csoport = Csoportok::create($validated);
        return response()->json($csoport, 201);
    });

    // Kezdő dátum beállítása
    Route::post('/kezdo-datum', [MenuController::class, 'updateKezdoDatum']);
    Route::post('/beallitas/kezdo-datum', [BeallitasController::class, 'setKezdoDatum']);


    // Menük szerkesztése
    Route::post('/menus', [MenuController::class, 'store']);
    Route::put('/menus/{menu}', [MenuController::class, 'update']);
    

    // Összes foglalás törlése
    Route::delete('/foglaltsag/osszes', [FoglaltsagController::class, 'osszesTorol']);
});






Route::get('/insert-test-data', [KorabbiEvController::class, 'insertTestData']);


Route::get('/korabbiev/{year}', [KorabbiEvController::class, 'getDataByYear']);



Route::get('/test', function () {
    return response()->json(['message' => 'A backend működik!']);
});


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
