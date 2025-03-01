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
        Log::info("Keresett év: " . $year); // Logoljuk az érkező évet
    
        // Lekérdezzük az adatokat az adott évhez
        $korabbiev = KorabbiEv::where('year', $year)->first();
    
        // Ellenőrizzük, hogy létezik-e a 'korabbiev' objektum és hogy van-e 'images' tulajdonsága
        if ($korabbiev && isset($korabbiev->images)) {
            Log::info("Talált adatok: " . json_encode($korabbiev)); // Logoljuk, ha van adat
    
            return response()->json($korabbiev);
        }
    
        // Ha nincs adat vagy nincs 'images' mező, akkor hibát adunk vissza
        Log::error("Adatok nem találhatóak vagy nincs képek: " . $year); // Logoljunk hibát
    
        return response()->json(['error' => 'Data not found or images not available'], 404);
    }
    
    public function getDataByYear($year)
    {
        Log::info("Getting data for year {$year}");
    
        $data = DB::table('korabbi_evs')
            ->where('year', '=', $year)
            ->first();
    
        if ($data) {
            Log::info("Data for year {$year}: ", ['data' => $data]);
    
            // Ellenőrizzük, hogy vannak-e képek és videók
            $kepek = !empty($data->kepek) ? array_map(fn($file) => asset($file), json_decode($data->kepek)) : [];
            $videok = !empty($data->videok) ? array_map(fn($file) => asset($file), json_decode($data->videok)) : [];
    
            return response()->json([
                'year' => $data->year,
                'images' => $kepek,
                'videos' => $videok,
            ]);
        }
    
        // Ha nincs adat az adott évre, adjunk vissza egy üres listát
        Log::error("No data found for year {$year}");
        return response()->json([
            'year' => $year,
            'images' => [],
            'videos' => []
        ]);
    }
    
    
    public function insertTestData()
{
    DB::table('korabbi_evs')->insert([
        'year' => '2023',
        'kepek' => json_encode(['kep1.jpg', 'kep2.jpg']),
        'videok' => json_encode(['video1.mp4', 'video2.mp4']),
    ]);

    return response()->json(['message' => 'Test data inserted successfully']);
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
