<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Sorrendiség fontos!
        $this->call([
            SzabalySeeder::class,
            BeallitasSeeder::class,
            CsoportokSeeder::class,
            KorabbeviSeeder::class,
            UsersSeeder::class,
            MenuSeeder::class,
            EtelSeeder::class,
            RoomSeeder::class,
            FamilydataSeeder::class,
            VersenyszamSeeder::class,
        ]);
    }
}