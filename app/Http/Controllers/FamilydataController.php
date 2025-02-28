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
        $request->validate([
            'nev' => 'required|string',
            'csaladsorszam' => 'required|integer',
            'szulo_id' => 'nullable|exists:familydatas,id'
        ]);
    
        $adat = FamilyData::create($request->all());
    
        return response()->json($adat, 201);
    }
    


        public function show($id)
        {
            $csaladtag = FamilyData::with('szulo', 'gyerekek')->findOrFail($id);
            return response()->json($csaladtag);
        }
        

    public function update(Request $request, $id)
    {

        $request->validate([
            'nev' => 'sometimes|required|string',
            'csaladsorszam' => 'sometimes|required|integer',
        ]);

        $adat = familydata::findOrFail($id);
        $adat->update($request->all());
        return response()->json($adat);
    }

    public function destroy($id)
    {
        familydata::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    public function children($id)
{
    return response()->json(FamilyData::where('szulo_id', $id)->get());
}

}
