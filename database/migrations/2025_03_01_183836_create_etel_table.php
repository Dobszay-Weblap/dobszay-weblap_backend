<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('etels', function (Blueprint $table) {
        $table->id();
        $table->foreignId('csoport_id')->constrained('csoportoks')->onDelete('cascade');
        $table->string('nev');
        $table->date('datum');
        $table->integer('adag_A')->nullable()->default(0);  // ⬅️ MÓDOSÍTÁS
        $table->integer('adag_B')->nullable()->default(0);  // ⬅️ MÓDOSÍTÁS
        $table->integer('adag_C')->nullable()->default(0);  // ⬅️ MÓDOSÍTÁS
        $table->string('leves_adag');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etels');
    }
};
