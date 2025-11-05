<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beallitas extends Model
{
    public function updateKezdoDatum(Request $request)
{
    $request->validate(['ertek' => 'required|date']);

    Beallitas::updateOrCreate(
        ['kulcs' => 'kezdo_datum'],
        ['ertek' => $request->ertek]
    );

    return response()->json(['message' => 'Kezdő dátum frissítve!']);
}

}
