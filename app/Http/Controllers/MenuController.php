<?php

namespace App\Http\Controllers;

use App\Models\Beallitas;
use App\Models\Etel;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
{
    try {
        if ($request->has('datum')) {
            return Menu::where('datum', $request->datum)->get();
        }
        return Menu::all();
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


    public function store(Request $request)
    {
        $validated = $request->validate([
            'datum' => 'required|date|unique:menus',
            'foetel_A' => 'required|string',
            'foetel_B' => 'required|string',
            'foetel_C' => 'required|string',
            'leves' => 'required|string',
        ]);

        return Menu::create($validated);
    }

    public function update(Request $request, Menu $menu)
{
    // Ellenőrizzük, hogy admin-e
    if ($request->user()->jogosultsagi_szint !== 'admin') {
        return response()->json(['error' => 'Nincs jogosultságod'], 403);
    }

    $validated = $request->validate([
        'datum' => [
            'sometimes',
            'date',
            'unique:menus,datum,' . $menu->id,
        ],
        'datum' => 'sometimes|date',
        'foetel_A' => 'sometimes|string|max:255',
        'foetel_B' => 'sometimes|string|max:255',
        'foetel_C' => 'sometimes|string|max:255',
        'leves' => 'sometimes|string|max:255',
    ]);

    $menu->update($validated);

    return $menu;
}

public function getKezdoDatum()
{
    $beallitas = Beallitas::where('kulcs', 'kezdo_datum')->first();
    return response()->json([
        'kezdoDatum' => $beallitas ? $beallitas->ertek : null
    ]);
}

public function updateKezdoDatum(Request $request)
{
    if ($request->user()->jogosultsagi_szint !== 'admin') {
        return response()->json(['error' => 'Nincs jogosultságod'], 403);
    }

    $request->validate([
        'datum' => 'required|date',
    ]);

    $ujKezdoDatum = Carbon::create($request->datum);
    
    // 1. Beállítás tábla frissítése
    $beallitas = Beallitas::where('kulcs', 'kezdo_datum')->first();
    if ($beallitas) {
        $beallitas->ertek = $ujKezdoDatum->format('Y-m-d');
        $beallitas->save();
    }

    // 2. Menük dátumának frissítése
    $menuk = Menu::orderBy('datum')->get();
    foreach ($menuk as $index => $menu) {
        $menu->datum = $ujKezdoDatum->copy()->addDays($index)->format('Y-m-d'); // ⬅️ Y-m-d
        $menu->save();
    }

    // 3. Ételek dátumának frissítése
    $etelek = Etel::orderBy('datum')->get();
    $etelekCsoportositva = $etelek->groupBy('datum');
    $index = 0;
    foreach ($etelekCsoportositva as $datum => $napiEtelek) {
        $ujDatum = $ujKezdoDatum->copy()->addDays($index)->format('Y-m-d'); // ⬅️ Y-m-d
        foreach ($napiEtelek as $etel) {
            $etel->datum = $ujDatum;
            $etel->save();
        }
        $index++;
    }

    return response()->json([
        'message' => 'Kezdő dátum és minden kapcsolódó dátum sikeresen frissítve',
        'kezdoDatum' => $ujKezdoDatum->format('Y-m-d')
    ]);
}

}
