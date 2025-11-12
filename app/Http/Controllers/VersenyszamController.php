<?php

namespace App\Http\Controllers;

use App\Models\Versenyszam;
use Illuminate\Http\Request;

class VersenyszamController extends Controller
{
    public function index()
{
    return Versenyszam::orderBy('id', 'asc')->get();
}


    public function store(Request $request)
    {
        $validated = $request->validate([
            'indulok' => 'nullable|string|max:255',
            'szul_ev' => 'nullable|integer|min:2000|max:2100',
            'evfolyam' => 'nullable|string|max:255',
            'futas' => 'nullable|string|max:255',
            'celbadobas' => 'nullable|string|max:255',
            'sakk' => 'nullable|string|max:255',
            'bicikli_futobicikli' => 'nullable|string|max:255',
            'motor_biciklitura_gyerek' => 'nullable|string|max:255',
            'rajz' => 'nullable|string|max:255',
            'kincskereses' => 'nullable|string|max:255',
            'uszas_uszogumi' => 'nullable|string|max:255',
            'sup' => 'nullable|string|max:255',
        ]);

        $versenyszam = Versenyszam::create($validated);
        return response()->json($versenyszam, 201);
    }

    public function show($id)
    {
        $versenyszam = Versenyszam::findOrFail($id);
        return response()->json($versenyszam);
    }

    public function update(Request $request, $id)
    {
        $versenyszam = Versenyszam::findOrFail($id);
        
        $validated = $request->validate([
            'indulok' => 'nullable|string|max:255',
            'szul_ev' => 'nullable|integer|min:2000|max:2100',
            'evfolyam' => 'nullable|string|max:255',
            'futas' => 'nullable|string|max:255',
            'celbadobas' => 'nullable|string|max:255',
            'sakk' => 'nullable|string|max:255',
            'bicikli_futobicikli' => 'nullable|string|max:255',
            'motor_biciklitura_gyerek' => 'nullable|string|max:255',
            'rajz' => 'nullable|string|max:255',
            'kincskereses' => 'nullable|string|max:255',
            'uszas_uszogumi' => 'nullable|string|max:255',
            'sup' => 'nullable|string|max:255',
        ]);

        $versenyszam->update($validated);
        return response()->json($versenyszam);
    }

    public function destroy($id)
    {
        $versenyszam = Versenyszam::findOrFail($id);
        $versenyszam->delete();
        return response()->json(['message' => 'Sikeres törlés'], 200);
    }
}