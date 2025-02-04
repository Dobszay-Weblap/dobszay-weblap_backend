<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class FoglaltsagController extends Controller
{
    public function getFoglaltsag()
{
    // Lekérjük az összes szobát
    $szobak = Room::all();

    // Foglaltság meghatározása
    $foglaltsag = $szobak->mapWithKeys(function ($szoba) {
        // A lakók számát összehasonlítjuk a max férőhellyel
        $foglalt = count($szoba->lakok) >= $szoba->max;
        return [$szoba->nev => $foglalt]; // Visszaadja a szoba nevét és foglaltságát
    });

    // Visszaküldjük a foglaltsági adatokat JSON formátumban
    return response()->json($foglaltsag);
}

}
