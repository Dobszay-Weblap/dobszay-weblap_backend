<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KorabbeviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evek = [
            [
                'year' => 2023,
                'kepek' => [
                    // ['url' => 'path/to/image1.jpg', 'title' => 'Cím 1'],
                    // ['url' => 'path/to/image2.jpg', 'title' => 'Cím 2'],
                ],
                'videok' => [
                    // ['url' => 'https://youtube.com/...', 'title' => 'Videó 1'],
                ],
            ],
            [
                'year' => 2022,
                'kepek' => [],
                'videok' => [],
            ],
        ];

        foreach ($evek as $ev) {
            DB::table('korabbi_evs')->updateOrInsert(
                ['year' => $ev['year']], // Keresési feltétel
                [
                    'kepek' => json_encode($ev['kepek']),
                    'videok' => json_encode($ev['videok']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}