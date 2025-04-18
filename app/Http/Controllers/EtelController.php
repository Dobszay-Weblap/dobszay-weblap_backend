<?php

namespace App\Http\Controllers;

use App\Models\Etel;
use Illuminate\Http\Request;

class EtelController extends Controller
{
    public function index(Request $request) {
        $datum = $request->query('datum');
    
        if ($datum) {
            return response()->json(Etel::where('datum', $datum)->get());
        }
    
        return response()->json(Etel::all());
    }
    
    


public function update(Request $request, $id)
{
    $etel = Etel::findOrFail($id);
    $user = auth()->user();

    // Csak a saját adatait szerkesztheti, kivéve ha admin
    if ($user->jogosultsagi_szint !== 'admin' && $etel->email !== $user->email) {
        return response()->json(['error' => 'Nincs jogosultságod ezt szerkeszteni.'], 403);
    }

    $etel->update($request->only(['adag_A', 'adag_B', 'adag_C'])); // Levest nem módosítjuk

    return response()->json($etel);
}





}
