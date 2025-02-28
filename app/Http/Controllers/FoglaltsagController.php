<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Szoba;

class FoglaltsagController extends Controller
{
    public function index()
{
    $szobak = Room::all();
    $foglaltsag = [];

    foreach ($szobak as $szoba) {
        $lakok = json_decode($szoba->lakok, true); // true kell, hogy asszociatív tömb legyen

        // Ha nem sikerült dekódolni, próbáljuk meg eltávolítani az extra idézőjeleket
        if (!is_array($lakok)) {
            $lakok = json_decode(stripslashes($szoba->lakok), true);
        }

        $foglaltsag[$szoba->szoba_id] = [
            'lakok' => $lakok ?? [],
            'max' => $szoba->max
        ];
    }

    return response()->json($foglaltsag);
}


    public function hozzad(Request $request)
    {
        $szoba = Room::where('szoba_id', $request->szoba)->first();

        if ($szoba) {
            $lakok = json_decode($szoba->lakok, true);
            $lakok[] = $request->lako;

            if (count($lakok) >= $szoba->max) {
                return response()->json(['error' => 'Szoba tele van'], 400);
            }

            $szoba->lakok = json_encode($lakok);
            $szoba->save();
            
            return $this->index();
        }

        return response()->json(['error' => 'Szoba nem található'], 404);
    }
}

