<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index() {
        return response()->json(Menu::orderBy('datum', 'asc')->get());
    }

    public function getMenuByDate($datum) {
        $menu = Menu::where('datum', $datum)->first();

        if (!$menu) {
            return response()->json(['message' => 'Nincs menü ezen a napon.'], 404);
        }

        return response()->json($menu);
    }
}
