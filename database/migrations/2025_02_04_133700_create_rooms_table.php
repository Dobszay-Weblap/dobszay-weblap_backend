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
            $table->string('fahaz_id')->nullable(); // ÚJ MEZŐ A FAHÁZ AZONOSÍTÓHOZ
            $table->string('nev')->nullable();
            $table->integer('max');
            $table->json('lakok')->nullable();
            $table->timestamps();
        });

    
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
