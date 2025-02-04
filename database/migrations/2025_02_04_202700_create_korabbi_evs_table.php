<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('korabbi_evs', function (Blueprint $table) {
            $table->id(); // Egyedi azonosító
            $table->string('year'); // Az év, pl. "2023"
            $table->json('kepek'); // Képek JSON formátumban (hivatkozások)
            $table->json('videok'); // Videók JSON formátumban (hivatkozások)
            $table->timestamps(); // A rekord létrehozásának és frissítésének ideje
        });
        
        DB::table('korabbi_evs')->insert([
            'year' => '2023',
            'kepek' => json_encode([
                'kepek/jatek.jpg',
                'kepek/jatek_2.jpg'
            ]),
            'videok' => json_encode([
                'video/Anya.mp4',
                'video/Tejhabos.mp4'
            ]),
        ]);
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('korabbi_evs');
    }
};
