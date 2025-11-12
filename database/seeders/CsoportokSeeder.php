<?php

namespace Database\Seeders;

use App\Models\Csoportok;
use Illuminate\Database\Seeder;

class CsoportokSeeder extends Seeder
{
    public function run(): void
    {
        $csoportNevek = [
            'Ági',
            'Mátéék',
            'Lucáék',
            'Tamasék',
            'Zsófiék',
            'Péterék',
            'Dávid',
            'Jánosék',
            'Kláráék',
            'Miklósék',
            'Eszterék',
            'Katiék',
            'Dorka',
            'Gergőék',
            'Bálint',
            'Mareszék',
            'Ritáék',
            'Ambrusék',
            'Balázsék',
            'Julcsiék',
            'Boriék',
            'Pannáék',
            'Marci',
            'Virág étterem',
        ];

        foreach ($csoportNevek as $nev) {
            Csoportok::firstOrCreate(['nev' => $nev]);
        }
    }
}