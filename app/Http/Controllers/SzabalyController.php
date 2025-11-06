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

        $szabaly = Szabaly::findOrFail($id);
        $szabaly->update($request->all());
        return response()->json($szabaly);
}


}
