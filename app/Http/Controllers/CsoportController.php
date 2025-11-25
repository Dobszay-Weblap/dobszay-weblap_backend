<?php

namespace App\Http\Controllers;

use App\Models\Csoportok;
use Illuminate\Http\Request;

class CsoportController extends Controller
{
    public function updateSorrend(Request $request) {
    $csoportok = $request->csoportok;
    
    foreach ($csoportok as $csoport) {
        Csoportok::where('id', $csoport['id'])
            ->update(['sorrend' => $csoport['sorrend']]);
    }
    
    return response()->json(['success' => true]);
}
}
