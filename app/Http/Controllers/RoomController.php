<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // Visszaadja az összes szobát
        return response()->json(Room::all());
    }

    public function store(Request $request)
    {
        // Új szoba hozzáadása
        $room = Room::create($request->all());
        return response()->json($room, 201);
    }

    public function show($id)
    {
        // Egyedi szoba adat lekérése
        return response()->json(Room::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        // Szoba frissítése
        $room = Room::findOrFail($id);
        $room->update($request->all());
        return response()->json($room);
    }

    public function destroy($id)
    {
        // Szoba törlése
        Room::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    // SzobaController.php

public function getSzobak() {
    // Lekérdezzük az összes szobát
    $szobak = Room::all();

    // Átalakítjuk az id-t az egyszerűbb 'f1', 'f2' formára
    $szobak = $szobak->map(function ($szoba) {
        // Az id-t pl. 'F1/1' -> 'f1' formára alakítjuk
        $id_parts = explode('/', $szoba->id);
        $szoba->id = strtolower($id_parts[0]); // Az első részt vesszük (pl. F1 -> f1)
        return $szoba;
    });

    return response()->json($szobak);
}

public function getFoglaltsag()
{
    $szobak = Room::all();
    $foglaltsag = $szobak->mapWithKeys(function ($szoba) {
        return [
            $szoba->nev => [
                'foglalt' => $szoba->lakok()->count() >= $szoba->max,
                'lakok' => $szoba->lakok()->pluck('nev')->toArray(), // Lakók nevei
            ],
        ];
    });
    return response()->json($foglaltsag);
}



public function addLako(Request $request)
{
    // Kérés validálása
    $validated = $request->validate([
        'szoba' => 'required|string',
        'lako' => 'required|string',
    ]);

    // A szoba lekérése
    $szoba = Room::where('nev', $validated['szoba'])->first();
    if (!$szoba) {
        return response()->json(['error' => 'Szoba nem található'], 404);
    }

    // Ellenőrizzük, hogy a szobában van-e még szabad hely
    if ($szoba->lakok()->count() >= $szoba->max) {
        return response()->json(['error' => 'A szoba már tele van'], 400);
    }

    // Hozzáadjuk a lakót a szobához
    $szoba->lakok()->create([
        'nev' => $validated['lako'],
    ]);

    // Visszaküldjük a frissített foglaltságot
    return response()->json($this->getFoglaltsag());
}


}
