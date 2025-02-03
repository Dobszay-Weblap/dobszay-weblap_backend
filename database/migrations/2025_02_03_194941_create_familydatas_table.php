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
            $table->year('szuletesi_ev')->nullable();
            $table->date('szulinap')->nullable();
            $table->date('nevnap')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('skype')->unique()->nullable();
            $table->integer('csaladsorszam')->nullable();
            $table->string('matebazsi_kod')->unique()->nullable();
            $table->integer('sor_szamlalo');
            $table->string('becenev_sor')->unique()->nullable();
            $table->string('bankszamla')->unique()->nullable();
            $table->string('revolut_id')->unique()->nullable();
            $table->integer('naptar');
            $table->integer('elso_generacio')->nullable();;
            $table->integer('unoka_generacio')->nullable();;
            $table->integer('dedunoka_generacio')->nullable();;
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
