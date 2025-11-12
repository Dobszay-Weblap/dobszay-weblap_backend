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
            $table->id();
            $table->string('year');
            $table->json('kepek');
            $table->json('videok');
            $table->timestamps();
        });
        
        DB::table('korabbi_evs')->insert([
            'year' => '2023',
            'kepek' => json_encode([
                
            ]),
            'videok' => json_encode([
                
            ]),
            'created_at' => now(),
            'updated_at' => now()
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