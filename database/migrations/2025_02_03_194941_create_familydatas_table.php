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
        Schema::create('familydatas', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->string('mobil_telefonszam')->nullable();
            $table->string('vonalas_telefon')->nullable();
            $table->string('cim')->nullable();
            $table->integer('szuletesi_ev')->nullable();
            $table->string('szulinap')->nullable();
            $table->string('nevnap')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('skype')->unique()->nullable();
            $table->integer('csaladsorszam')->nullable();
            $table->integer('matebazsi_kod')->unique()->nullable();
            $table->integer('sor_szamlalo');
            $table->string('becenev_sor')->nullable();
            $table->string('bankszamla')->nullable();
            $table->string('revolut_id')->nullable();
            $table->string('ki_ki')->nullable();
            $table->integer('naptar')->nullable();
            $table->integer('elso_generacio')->nullable();
            $table->integer('unoka_generacio')->nullable();
            $table->integer('dedunoka_generacio')->nullable();
            $table->string('szin_kod')->nullable();
            $table->timestamps();

    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familydatas');
    }
};
