<?php

namespace App\Http\Controllers;

use App\Models\Szabaly;
use Illuminate\Http\Request;

class SzabalyController extends Controller
{
    public function index()
    {
        return Szabaly::first();
    }


public function update(Request $request, $id)
{

    $request->validate([
            'felso_cim' =>'sometimes|required|string',
            'also_cim' =>'sometimes|required|string',
            'gondnok_nev'  =>'sometimes|required|string',
            'wifi_nev' =>'sometimes|required|string',
            'wifi_jelszo'=>'sometimes|required|string',
            'csendes_piheno'=>'sometimes|required|text',
            'malacszolgalat'=>'sometimes|required|text',
        ]);
        
    $szabaly = Szabaly::find($id);
        $szabaly->fill($request->all());
        $szabaly->save();
}

}
