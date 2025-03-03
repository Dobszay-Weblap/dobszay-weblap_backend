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
        $table->string('nev');
        $table->string('adag_A')->default(0);
        $table->string('adag_B')->default(0);
        $table->string('adag_C')->default(0);
        $table->string('leves_adag')->default(0);
        $table->string('email'); // A felhasználó e-mail címe
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
