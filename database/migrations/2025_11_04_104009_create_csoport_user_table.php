<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /* Schema::create('csoport_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('csoportok_id')->constrained('csoportoks')->onDelete('cascade');
            $table->timestamps();

            // Egy user ne legyen többször ugyanabban a csoportban
            $table->unique(['user_id', 'csoportok_id']);
        }); */
    }

    public function down(): void
    {
        Schema::dropIfExists('csoport_user');
    }
};
