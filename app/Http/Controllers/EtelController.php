<?php

namespace App\Http\Controllers;

use App\Models\Etel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtelController extends Controller
{
    public function index(Request $request)
{
    try {
        $user = $request->user();
        
        $query = Etel::query();

        if ($request->has('datum')) {
            $query->where('datum', $request->datum);
        }

        // ✅ MINDENKI látja az összes ételt (admin és normál felhasználó is)
        return $query->with('csoport')->get();

    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    public function update(Request $request, Etel $etel)
{
    $user = Auth::user();

    // Admin bármit szerkeszthet
    if ($user->jogosultsagi_szint !== 'admin') {
        // Csak akkor engedjük, ha a felhasználó benne van a megfelelő csoportban
        $csoportIds = $user->csoportok->pluck('id')->toArray();
        if (!in_array($etel->csoport_id, $csoportIds)) {
            return response()->json(['error' => 'Nincs jogosultságod ezt a sort módosítani.'], 403);
        }
    }

    $validated = $request->validate([
        'nev' => 'sometimes|string|max:255',
        'datum' => 'sometimes|date', 
        'adag_A' => 'nullable|integer|min:0',
        'adag_B' => 'nullable|integer|min:0',
        'adag_C' => 'nullable|integer|min:0',
        'leves_adag' => 'nullable|string',
    ]);

    if (!isset($validated['leves_adag'])) {
        $validated['leves_adag'] = '';
    }

    $etel->update($validated);

    // ✅ Visszaadjuk a frissített ételt a kapcsolattal együtt
    return $etel->load('csoport');
}
}