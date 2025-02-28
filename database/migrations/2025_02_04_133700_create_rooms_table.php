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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('szoba_id');
            $table->string('fahaz_id'); // ÚJ MEZŐ A FAHÁZ AZONOSÍTÓHOZ
            $table->string('nev')->nullable();
            $table->integer('max');
            $table->json('lakok')->nullable();
            $table->timestamps();
        });

        DB::table('rooms')->insert([
            [
                'szoba_id' => 'F1/1',
                'fahaz_id' => 'f1',
                'nev' => '1. Faház',
                'max' => 3,
                'lakok' => json_encode(['Eszter', 'Buszti', 'Sajka'])
            ],
            [
                'szoba_id' => 'F1/2',
                'fahaz_id' => 'f1',
                'nev' => '1. Faház',
                'max' => 2,
                'lakok' => json_encode(['Dávid'])
            ],
            [
                'szoba_id' => 'F2/1',
                'fahaz_id' => 'f2',
                'nev' => '2. Faház',
                'max' => 3,
                'lakok' => json_encode(['Anna', 'Sára', 'Zsófi'])
            ],
            [
                'szoba_id' => 'F2/2',
                'fahaz_id' => 'f2',
                'nev' => '2. Faház',
                'max' => 2,
                'lakok' => json_encode(['Máté', 'Peti'])
            ]
        ]);
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
