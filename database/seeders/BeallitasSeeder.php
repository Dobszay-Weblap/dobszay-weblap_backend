<?php

namespace Database\Seeders;

use App\Models\Beallitas;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BeallitasSeeder extends Seeder
{
    public function run(): void
    {
        Beallitas::create([
            'kulcs' => 'kezdo_datum',
            'ertek' => '2025-07-01',
        ]);
    }
}