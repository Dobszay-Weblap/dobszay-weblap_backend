<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeallitasController extends Controller
{
    public function getKezdoDatum()
    {
        $datum = Beallitas::where('kulcs', 'kezdo_datum')->value('ertek');
        return response()->json(['datum' => $datum]);
    }

    public function setKezdoDatum(Request $request)
    {
        $validated = $request->validate([
            'datum' => 'required|date',
        ]);

        Beallitas::updateOrCreate(
            ['kulcs' => 'kezdo_datum'],
            ['ertek' => $validated['datum']]
        );

        return response()->json(['message' => 'Kezdő dátum frissítve', 'datum' => $validated['datum']]);
    }
}
