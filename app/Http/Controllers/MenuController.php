<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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
        'datum' => 'sometimes|date',
        'foetel_A' => 'sometimes|string|max:255',
        'foetel_B' => 'sometimes|string|max:255',
        'foetel_C' => 'sometimes|string|max:255',
        'leves' => 'sometimes|string|max:255',
    ]);

    $menu->update($validated);

    return $menu;
}
}
