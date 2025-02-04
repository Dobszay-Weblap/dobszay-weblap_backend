<?php

namespace App\Http\Controllers;

use App\Models\KorabbiEv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class KorabbiEvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


public function show($year)
{
    // Lekérdezi az adatokat az adott évhez
    $korabbiev = KorabbiEv::where('year', $year)->first();

    // Ellenőrzi, hogy létezik-e a 'korabbiev' objektum és hogy van-e 'images' tulajdonsága
    if ($korabbiev && isset($korabbiev->images)) {
        return response()->json($korabbiev);
    }

    // Ha nincs adat vagy nincs 'images' mező, akkor hibát ad vissza
    return response()->json(['error' => 'Data not found or images not available'], 404);
}

    

    

    public function getDataByYear($year)
    {
        // Az adatbázisból lekérdezzük az adatokat az adott évhez
        $data = DB::table('korabbiev_adatok')->where('year', $year)->first();
    
        if ($data) {
            return [
                'year' => $data->year,
                'kepek' => json_decode($data->images),
                'videok' => json_decode($data->videos),
            ];
        }
    
        return null; // Ha nincs adat, akkor null-t adunk vissza
    }
    


    public function getYearContent($year)
    {
        // Itt adatokat kérhetsz le az adatbázisból vagy fájlokból
        // Az év alapján például képeket és videókat tölthetsz be
        $content = [];

        switch ($year) {
            case '2023':
                $content = [
                    'images' => ['image1.jpg', 'image2.jpg'],
                    'videos' => ['video1.mp4']
                ];
                break;
            case '2022':
                $content = [
                    'images' => ['image1-2022.jpg', 'image2-2022.jpg'],
                    'videos' => ['video1-2022.mp4']
                ];
                break;
            case '2021':
                $content = [
                    'images' => ['image1-2021.jpg', 'image2-2021.jpg'],
                    'videos' => ['video1-2021.mp4']
                ];
                break;
            default:
                $content = [];
        }


        return response()->json($content);
    }
}
