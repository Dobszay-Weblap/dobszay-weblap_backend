<?php

namespace App\Http\Controllers;

use App\Models\KorabbiEv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KorabbiEvController extends Controller
{
    public function getDataByYear($year)
    {
        Log::info("Getting data for year {$year}");
    
        $data = DB::table('korabbi_evs')
            ->where('year', '=', $year)
            ->first();
    
        if ($data) {
            Log::info("Data for year {$year}: ", ['data' => $data]);
    
            $kepek = !empty($data->kepek) ? array_map(fn($file) => asset($file), json_decode($data->kepek)) : [];
            $videok = !empty($data->videok) ? array_map(fn($file) => asset($file), json_decode($data->videok)) : [];
    
            return response()->json([
                'year' => $data->year,
                'images' => $kepek,
                'videos' => $videok,
            ]);
        }
    
        Log::error("No data found for year {$year}");
        return response()->json([
            'year' => $year,
            'images' => [],
            'videos' => []
        ]);
    }

    public function uploadImage(Request $request, $year)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // max 10MB
        ]);

        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                
                // Mentés a public/kepek mappába
                $file->move(public_path('kepek'), $filename);
                $filepath = 'kepek/' . $filename;

                // Adatbázis frissítés vagy létrehozás
                $korabbiEv = DB::table('korabbi_evs')->where('year', $year)->first();

                if ($korabbiEv) {
                    // Meglévő képek listájának frissítése
                    $kepek = json_decode($korabbiEv->kepek, true) ?? [];
                    $kepek[] = $filepath;

                    DB::table('korabbi_evs')
                        ->where('year', $year)
                        ->update([
                            'kepek' => json_encode($kepek),
                            'updated_at' => now()
                        ]);
                } else {
                    // Új bejegyzés létrehozása
                    DB::table('korabbi_evs')->insert([
                        'year' => $year,
                        'kepek' => json_encode([$filepath]),
                        'videok' => json_encode([]),
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }

                return response()->json([
                    'message' => 'Kép sikeresen feltöltve',
                    'file' => asset($filepath)
                ], 200);
            }

            return response()->json(['error' => 'Nincs fájl feltöltve'], 400);
        } catch (\Exception $e) {
            Log::error("Image upload error: " . $e->getMessage());
            return response()->json(['error' => 'Hiba a feltöltés során'], 500);
        }
    }

    public function uploadVideo(Request $request, $year)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,avi,mov,wmv|max:102400', // max 100MB
        ]);

        try {
            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $filename = time() . '_' . $file->getClientOriginalName();
                
                // Mentés a public/video mappába
                $file->move(public_path('videok'), $filename);
                $filepath = 'videok/' . $filename;

                // Adatbázis frissítés vagy létrehozás
                $korabbiEv = DB::table('korabbi_evs')->where('year', $year)->first();

                if ($korabbiEv) {
                    // Meglévő videók listájának frissítése
                    $videok = json_decode($korabbiEv->videok, true) ?? [];
                    $videok[] = $filepath;

                    DB::table('korabbi_evs')
                        ->where('year', $year)
                        ->update([
                            'videok' => json_encode($videok),
                            'updated_at' => now()
                        ]);
                } else {
                    // Új bejegyzés létrehozása
                    DB::table('korabbi_evs')->insert([
                        'year' => $year,
                        'kepek' => json_encode([]),
                        'videok' => json_encode([$filepath]),
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }

                return response()->json([
                    'message' => 'Videó sikeresen feltöltve',
                    'file' => asset($filepath)
                ], 200);
            }

            return response()->json(['error' => 'Nincs fájl feltöltve'], 400);
        } catch (\Exception $e) {
            Log::error("Video upload error: " . $e->getMessage());
            return response()->json(['error' => 'Hiba a feltöltés során'], 500);
        }
    }

    public function deleteImage(Request $request, $year)
    {
        $filepath = $request->input('filepath');
        
        try {
            $korabbiEv = DB::table('korabbi_evs')->where('year', $year)->first();
            
            if ($korabbiEv) {
                $kepek = json_decode($korabbiEv->kepek, true) ?? [];
                $kepek = array_filter($kepek, fn($k) => $k !== $filepath);
                
                DB::table('korabbi_evs')
                    ->where('year', $year)
                    ->update([
                        'kepek' => json_encode(array_values($kepek)),
                        'updated_at' => now()
                    ]);
                
                // Fájl törlése
                if (file_exists(public_path($filepath))) {
                    unlink(public_path($filepath));
                }
                
                return response()->json(['message' => 'Kép törölve'], 200);
            }
            
            return response()->json(['error' => 'Nem található'], 404);
        } catch (\Exception $e) {
            Log::error("Delete error: " . $e->getMessage());
            return response()->json(['error' => 'Hiba a törlés során'], 500);
        }
    }

    public function deleteVideo(Request $request, $year)
    {
        $filepath = $request->input('filepath');
        
        try {
            $korabbiEv = DB::table('korabbi_evs')->where('year', $year)->first();
            
            if ($korabbiEv) {
                $videok = json_decode($korabbiEv->videok, true) ?? [];
                $videok = array_filter($videok, fn($v) => $v !== $filepath);
                
                DB::table('korabbi_evs')
                    ->where('year', $year)
                    ->update([
                        'videok' => json_encode(array_values($videok)),
                        'updated_at' => now()
                    ]);
                
                // Fájl törlése
                if (file_exists(public_path($filepath))) {
                    unlink(public_path($filepath));
                }
                
                return response()->json(['message' => 'Videó törölve'], 200);
            }
            
            return response()->json(['error' => 'Nem található'], 404);
        } catch (\Exception $e) {
            Log::error("Delete error: " . $e->getMessage());
            return response()->json(['error' => 'Hiba a törlés során'], 500);
        }
    }
}