<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class FoglaltsagController extends Controller
{
    public function hozzaadLako(Request $request)
    {
        $request->validate([
            'szoba' => 'required|string',
            'lako' => 'required|string'
        ]);

        // Megkeressük a szobát
        $szoba = Room::where('nev', $request->szoba)->first();

        if (!$szoba) {
            return response()->json(['error' => 'A szoba nem található'], 404);
        }

        // Ha tele van, ne engedjük hozzáadni
        if ($szoba->tele) {
            return response()->json(['error' => 'Ez a szoba tele van!'], 400);
        }

        // Hozzáadjuk az új lakót
        $szoba->lakok = json_decode($szoba->lakok, true) ?? []; // Ha nincs lakó, hozzunk létre egy üres tömböt
        $szoba->lakok[] = $request->lako;
        $szoba->lakok = json_encode($szoba->lakok);
        $szoba->save();

        return response()->json($szoba);
    }

}
