<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szabalies', function (Blueprint $table) {
        $table->id();
        $table->string('felso_cim')->nullable();
        $table->string('also_cim')->nullable();
        $table->string('gondnok_nev')->nullable();
        $table->string('wifi_nev')->nullable();
        $table->string('wifi_jelszo')->nullable();
        $table->text('csendes_piheno')->nullable();
        $table->text('malacszolgalat')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szabalies');
    }
};
