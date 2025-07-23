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
        $query = Etel::query();

        if ($request->has('datum')) {
            $query->where('datum', $request->datum);
        }

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

        $etel->update($request->only([
            'adag_A', 'adag_B', 'adag_C', 'leves_adag'
        ]));

        return $etel;
    }
}
