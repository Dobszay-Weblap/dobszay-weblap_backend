<?php

namespace App\Http\Controllers;

use App\Models\familydata;
use Illuminate\Http\Request;

class FamilydataController extends Controller
{
    public function index()
    {
        return response()->json(familydata::all());
    }

    public function store(Request $request)
    {
        $adat = familydata::create($request->all());
        return response()->json($adat, 201);
    }

    public function show($id)
    {
        return response()->json(familydata::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $adat = familydata::findOrFail($id);
        $adat->update($request->all());
        return response()->json($adat);
    }

    public function destroy($id)
    {
        familydata::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
