<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class FoglaltsagController extends Controller
{
    public function index()
    {
        $szobak = Room::all();
        $result = [];

        foreach ($szobak as $szoba) {
            // Dekódoljuk a lakókat
            $lakok = is_string($szoba->lakok) 
                ? json_decode($szoba->lakok, true) 
                : $szoba->lakok;
            
            // Ha nem tömb, üres tömböt adunk vissza
            if (!is_array($lakok)) {
                $lakok = [];
            }

            $result[] = [
                'szoba_id' => $szoba->szoba_id,
                'fahaz_id' => $szoba->fahaz_id,
                'nev' => $szoba->nev,
                'max' => $szoba->max,
                'lakok' => $lakok,
                'foglalt' => count($lakok) >= $szoba->max
            ];
        }

        return response()->json($result);
    }

    public function hozzad(Request $request)
    {
        // Validáljuk a kérést
        $validated = $request->validate([
            'szoba' => 'required|string',
            'lako' => 'required|string|max:100'
        ]);

        // Megkeressük a szobát
        $szoba = Room::where('szoba_id', $validated['szoba'])->first();

        if (!$szoba) {
            return response()->json(['error' => 'Szoba nem található'], 404);
        }

        // Dekódoljuk a lakókat
        $lakok = is_string($szoba->lakok) 
            ? json_decode($szoba->lakok, true) 
            : $szoba->lakok;
        
        if (!is_array($lakok)) {
            $lakok = [];
        }

        // Ellenőrizzük, hogy van-e még hely
        if (count($lakok) >= $szoba->max) {
            return response()->json(['error' => 'A szoba már tele van'], 400);
        }

        // Ellenőrizzük, hogy a lakó már bent van-e
        if (in_array($validated['lako'], $lakok)) {
            return response()->json(['error' => 'Ez a lakó már szerepel a szobában'], 400);
        }

        // Hozzáadjuk a lakót
        $lakok[] = $validated['lako'];
        $szoba->lakok = json_encode($lakok);
        $szoba->save();

        // Visszaadjuk a frissített listát
        return $this->index();
    }

    public function torol(Request $request)
    {
        // Validáljuk a kérést
        $validated = $request->validate([
            'szoba' => 'required|string',
            'lako' => 'required|string'
        ]);

        // Megkeressük a szobát
        $szoba = Room::where('szoba_id', $validated['szoba'])->first();

        if (!$szoba) {
            return response()->json(['error' => 'Szoba nem található'], 404);
        }

        // Dekódoljuk a lakókat
        $lakok = is_string($szoba->lakok) 
            ? json_decode($szoba->lakok, true) 
            : $szoba->lakok;
        
        if (!is_array($lakok)) {
            return response()->json(['error' => 'Nincs lakó a szobában'], 400);
        }

        // Eltávolítjuk a lakót
        $lakok = array_values(array_filter($lakok, function($lako) use ($validated) {
            return $lako !== $validated['lako'];
        }));

        $szoba->lakok = json_encode($lakok);
        $szoba->save();

        // Visszaadjuk a frissített listát
        return $this->index();
    }

   public function osszesTorol(Request $request)
{
    // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
    $user = auth()->user(); // vagy: $request->user();

    if (!$user) {
        return response()->json(['error' => 'Nem vagy bejelentkezve'], 401);
    }

    // Ellenőrizzük, hogy admin-e
    if ($user->jogosultsagi_szint !== 'admin') {
        return response()->json(['error' => 'Nincs jogosultságod ehhez a művelethez'], 403);
    }

    // Lekérjük az összes szobát
    $szobak = \App\Models\Room::all();

    foreach ($szobak as $szoba) {
        $szoba->lakok = json_encode([]); // Kiürítjük a lakókat
        $szoba->save();
    }

    return response()->json([
        'success' => true,
        'message' => 'Minden lakó törölve lett.',
        'torolve' => $szobak->count()
    ]);
}

public function destroyLako(Request $request)
{
    $roomId = $request->query('roomId');
    $index = $request->query('index');
    $szoba = Room::where('szoba_id', $roomId)->first();

    if (!$szoba) {
        return response()->json(['error' => 'Szoba nem található'], 404);
    }

    // Dekódoljuk a lakókat
    $lakok = is_string($szoba->lakok) 
        ? json_decode($szoba->lakok, true) 
        : $szoba->lakok;
    
    if (!is_array($lakok)) {
        return response()->json(['error' => 'Nincs lakó a szobában'], 400);
    }

    // Ellenőrizzük hogy létezik-e az index
    if (!isset($lakok[$index])) {
        return response()->json(['error' => 'Lakó nem található ezen az indexen'], 404);
    }

    // Eltávolítjuk az adott lakót
    array_splice($lakok, $index, 1);
    
    $szoba->lakok = json_encode($lakok);
    $szoba->save();

    return response()->json([
        'success' => true,
        'message' => 'Lakó sikeresen törölve'
    ]);
}


}