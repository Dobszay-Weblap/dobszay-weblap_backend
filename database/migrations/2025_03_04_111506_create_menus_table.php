<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->date('datum')->unique(); // Az adott nap dátuma
            $table->string('foetel_A'); // Főétel A neve
            $table->string('foetel_B');// Főétel B neve
            $table->string('foetel_C'); // Főétel C neve
            $table->string('leves'); // Leves neve
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('menus');
    }
};
