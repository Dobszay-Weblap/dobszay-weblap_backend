<?php

namespace Database\Seeders;

use App\Models\Szabaly;
use Illuminate\Database\Seeder;

class SzabalySeeder extends Seeder
{
    public function run(): void
    {
        Szabaly::create([
            'felso_cim' => 'Iskola utca ???',
            'also_cim' => 'Szigeti József u. 18',
            'gondnok_nev' => 'Zsuzsa telefon: ',
            'wifi_nev' => 'kaptalan',
            'wifi_jelszo' => '12341234',
            'csendes_piheno' => "nincs hangoskodás 13–15 h és 21 h-tól,\nez nem fedi le a kisbabák elvásását, ha lehet, többet is írjunk ki.\nMondd meg a kisbabások!",
            'malacszolgalat' => "Pohárjelölő, otthonról jellegzetes saját bögre stb...\nLehetőség szerint mindenki maga (családja) után mosogat (asszem ebben maradtunk)"
        ]);
    }
}