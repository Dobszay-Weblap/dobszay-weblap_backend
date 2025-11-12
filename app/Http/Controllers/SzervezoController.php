<?php

namespace App\Http\Controllers;

use App\Models\Szervezo;
use Illuminate\Http\Request;

class SzervezoController extends Controller
{
    public function index()
    {
        return Szervezo::all();
    }

    public function store(Request $request)
{
    // csak a mezőket veszi figyelembe, amiket tényleg használunk
    $validated = $request->only([
        'futas',
        'celbadobas',
        'sakk',
        'bicikli_futobicikli',
        'motor_biciklitura_gyerek',
        'rajz',
        'kincskereses',
        'uszas_uszogumi',
        'sup',
    ]);

    // ha van már rekord, frissítjük
    $szervezo = Szervezo::first();
    if ($szervezo) {
        $szervezo->update($validated);
    } else {
        $szervezo = Szervezo::create($validated);
    }

    return response()->json($szervezo, 201);
}


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nev' => 'required|string|max:255',
        ]);

        $szervezo = Szervezo::findOrFail($id);
        $szervezo->update($validated);

        return response()->json($szervezo);
    }

    public function destroy($id)
    {
        $szervezo = Szervezo::findOrFail($id);
        $szervezo->delete();

        return response()->json(null, 204);
    }
}

