<?php

namespace App\Http\Controllers;

use App\Models\Etel;
use Illuminate\Http\Request;

class EtelController extends Controller
{
    public function index()
    {
        return response()->json(Etel::all());
    }
}
