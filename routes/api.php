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
use App\Http\Controllers\CsoportController;
use App\Http\Controllers\KorabbiEvController;
use App\Http\Controllers\SzervezoController;
use App\Http\Controllers\VersenyszamController;
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
    Route::post('/change-password-first', [UserController::class, 'changePasswordFirst']);

    // Csoportok megtekintése
    Route::get('/csoportok', function () {
        return Csoportok::all();
    });

    // Menük és ételek megtekintése
    Route::get('/menus', [MenuController::class, 'index']);
    Route::get('/etelek', [EtelController::class, 'index']);

    Route::get('/kezdo-datum', [MenuController::class, 'getKezdoDatum']);
    Route::get('/beallitas/kezdo-datum', [BeallitasController::class, 'getKezdoDatum']);

    // Családi adatok
    Route::get('/csaladi-adatok', [FamilyDataController::class, 'index']);
    Route::post('/csaladi-adatok', [FamilyDataController::class, 'store']);
    Route::get('/csaladi-adatok/{id}', [FamilyDataController::class, 'show']);
    Route::put('/csaladi-adatok/{id}', [FamilyDataController::class, 'update']);
    Route::delete('/csaladi-adatok/{id}', [FamilyDataController::class, 'destroy']);

    // Szabályok
    Route::get('/szabalyok', [SzabalyController::class, 'index']);
    Route::put('/szabalyok/{id}', [SzabalyController::class, 'update']);

    Route::put('/etelek/{etel}', [EtelController::class, 'update']); 

    // Foglalások
    Route::get('/foglaltsag', [FoglaltsagController::class, 'index']);
    Route::post('/foglaltsag/hozzad', [FoglaltsagController::class, 'hozzad']);
    Route::delete('/foglaltsag/torol', [FoglaltsagController::class, 'destroyLako']);

    // Szobák
    Route::get('rooms', [RoomController::class, 'index']);
    Route::get('rooms/{id}', [RoomController::class, 'show']);

    // Korábbi évek
    Route::get('/korabbiev/{year}', [KorabbiEvController::class, 'getDataByYear']);
    Route::post('/korabbiev/{year}/upload-image', [KorabbiEvController::class, 'uploadImage']);
    Route::post('/korabbiev/{year}/upload-video', [KorabbiEvController::class, 'uploadVideo']);
    Route::delete('/korabbiev/{year}/delete-image', [KorabbiEvController::class, 'deleteImage']);
    Route::delete('/korabbiev/{year}/delete-video', [KorabbiEvController::class, 'deleteVideo']);

    // Képek és videók
    Route::get('/images', function () {
        $files = File::files(public_path('kepek'));
        $images = collect($files)->map(function ($file) {
            return url('kepek/' . $file->getFilename());
        });
        return response()->json($images);
    });

    Route::get('/videos', function () {
        $files = File::files(public_path('videok'));
        $videos = collect($files)->map(function ($file) {
            return url('videok/' . $file->getFilename());
        });
        return response()->json($videos);
    });

    // Versenyszámok
    Route::get('versenyszamok', [VersenyszamController::class, 'index']);
    Route::post('versenyszamok', [VersenyszamController::class, 'store']);
    Route::get('versenyszamok/{id}', [VersenyszamController::class, 'show']);
    Route::put('versenyszamok/{id}', [VersenyszamController::class, 'update']);
    Route::delete('versenyszamok/{id}', [VersenyszamController::class, 'destroy']);

    // Szervezők
    Route::get('szervezok', [SzervezoController::class, 'index']);
    Route::post('szervezok', [SzervezoController::class, 'store']);
    Route::put('szervezok/{id}', [SzervezoController::class, 'update']);
    Route::delete('szervezok/{id}', [SzervezoController::class, 'destroy']);
});

// -------------------------
// 🛠️ Admin jogosultságok
// -------------------------
Route::middleware(['auth:sanctum', 'admin'])->group(function () {

    // Felhasználók kezelése
Route::get('/admin/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::put('/users/{id}/csoportok', [UserController::class, 'updateCsoportok']);

// Csoport létrehozása
Route::post('/csoportok', function (Request $request) {
    $validated = $request->validate([
        'nev' => 'required|string|max:255|unique:csoportoks,nev'
    ]);
    $csoport = Csoportok::create($validated);
    return response()->json($csoport, 201);
});

// ✅ FONTOS: A specifikus route-okat előre kell tenni!
Route::put('/csoportok/sorrend', [CsoportController::class, 'updateSorrend']);

// Csoport átnevezése - ezt a végére tesszük
Route::put('/csoportok/{id}', function (Request $request, $id) {
    $validated = $request->validate([
        'nev' => 'required|string|max:255|unique:csoportoks,nev,' . $id
    ]);
    
    $csoport = Csoportok::findOrFail($id);
    $csoport->update($validated);
    
    return response()->json($csoport);
});
    // Kezdő dátum beállítása
    Route::post('/kezdo-datum', [MenuController::class, 'updateKezdoDatum']);
    Route::post('/beallitas/kezdo-datum', [BeallitasController::class, 'setKezdoDatum']);

    // Menük szerkesztése
    Route::post('/menus', [MenuController::class, 'store']);
    Route::put('/menus/{menu}', [MenuController::class, 'update']);

    // Összes foglalás törlése
    Route::delete('/foglaltsag/osszes', [FoglaltsagController::class, 'osszesTorol']);

     Route::get('/admin/backup/create', [BackupController::class, 'create']);
    Route::get('/admin/backup/list', [BackupController::class, 'list']);
    Route::get('/admin/backup/download/{filename}', [BackupController::class, 'download']);
    Route::delete('/admin/backup/delete/{filename}', [BackupController::class, 'delete']);
});