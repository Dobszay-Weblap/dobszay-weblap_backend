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
        Schema::create('versenyszamok', function (Blueprint $table) {
            $table->id();
            $table->string('indulok')->nullable();
            $table->year('szul_ev')->nullable();
            $table->string('evfolyam')->nullable();
            $table->string('futas')->nullable();
            $table->string('celbadobas')->nullable();
            $table->string('sakk')->nullable();
            $table->string('bicikli_futobicikli')->nullable();
            $table->string('motor_biciklitura_gyerek')->nullable();
            $table->string('rajz')->nullable();
            $table->string('kincskereses')->nullable();
            $table->string('uszas_uszogumi')->nullable();
            $table->string('sup')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versenyszamok');
    }
};
