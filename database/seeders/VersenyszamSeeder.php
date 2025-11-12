<?php

namespace Database\Seeders;

use App\Models\Versenyszam;
use Illuminate\Database\Seeder;

class VersenyszamSeeder extends Seeder
{
    public function run(): void
    {
        $versenyzok = [
            ['indulok' => 'Botond', 'szul_ev' => 2011, 'evfolyam' => '7. osztály'],
            ['indulok' => 'Lívia', 'szul_ev' => 2015, 'evfolyam' => '4. osztály'],
            ['indulok' => 'Lackó', 'szul_ev' => null, 'evfolyam' => '4. osztály'],
            ['indulok' => 'Csongor', 'szul_ev' => null, 'evfolyam' => '3. osztály'],
            ['indulok' => 'Veronika', 'szul_ev' => 2016, 'evfolyam' => '2. osztály'],
            ['indulok' => 'Boldizsár', 'szul_ev' => null, 'evfolyam' => '2. osztály'],
            ['indulok' => 'Vili', 'szul_ev' => 2017, 'evfolyam' => '1. osztály'],
            ['indulok' => 'Bori', 'szul_ev' => null, 'evfolyam' => '2. osztály'],
            ['indulok' => 'Anna', 'szul_ev' => null, 'evfolyam' => '1. osztály'],
            ['indulok' => 'Balázs', 'szul_ev' => 2018, 'evfolyam' => '1. osztály'],
            ['indulok' => 'Rozi', 'szul_ev' => null, 'evfolyam' => 'nagycsoport'],
            ['indulok' => 'Marci', 'szul_ev' => null, 'evfolyam' => 'nagycsoport'],
            ['indulok' => 'Ábel', 'szul_ev' => null, 'evfolyam' => ''],
            ['indulok' => 'Zsombor', 'szul_ev' => 2019, 'evfolyam' => 'nagycsoport'],
            ['indulok' => 'Vicuska', 'szul_ev' => 2020, 'evfolyam' => 'középsős csoport'],
            ['indulok' => 'Bogi', 'szul_ev' => null, 'evfolyam' => 'középsős csoport'],
            ['indulok' => 'Misi', 'szul_ev' => null, 'evfolyam' => 'középsős csoport'],
            ['indulok' => 'Adél', 'szul_ev' => null, 'evfolyam' => 'középsős csoport'],
            ['indulok' => 'Beni', 'szul_ev' => null, 'evfolyam' => ''],
            ['indulok' => 'Luca', 'szul_ev' => 2021, 'evfolyam' => ''],
            ['indulok' => 'Janka', 'szul_ev' => null, 'evfolyam' => ''],
            ['indulok' => 'Dávid', 'szul_ev' => 2022, 'evfolyam' => ''],
            ['indulok' => 'Júlia', 'szul_ev' => null, 'evfolyam' => ''],
            ['indulok' => 'János', 'szul_ev' => null, 'evfolyam' => ''],
            ['indulok' => 'Kinga', 'szul_ev' => 2023, 'evfolyam' => ''],
            ['indulok' => 'Bende', 'szul_ev' => 2024, 'evfolyam' => ''],
            ['indulok' => 'Soma', 'szul_ev' => null, 'evfolyam' => ''],
            ['indulok' => 'Barnabás', 'szul_ev' => 2025, 'evfolyam' => ''],
            ['indulok' => 'Márton', 'szul_ev' => null, 'evfolyam' => ''],
            ['indulok' => 'Ágnes', 'szul_ev' => null, 'evfolyam' => ''],
        ];

        foreach ($versenyzok as $v) {
            Versenyszam::create(array_merge($v, [
                'futas' => '',
                'celbadobas' => '',
                'sakk' => '',
                'bicikli_futobicikli' => '',
                'motor_biciklitura_gyerek' => '',
                'rajz' => '',
                'kincskereses' => '',
                'uszas_uszogumi' => '',
                'sup' => '',
            ]));
        }
    }
}