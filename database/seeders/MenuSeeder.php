<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Beallitas;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $kezdoDatum = Carbon::create(
            Beallitas::where('kulcs', 'kezdo_datum')->value('ertek')
        );

        $menuk = [
            ['Sajtos tejfölös spagetti', 'Borsostokány tésztával', 'Görögapró pecsenye hasábkrumpli', 'Kertészleves'],
            ['Bolonai spagetti', 'Sóskamártás tojás burgonya', 'Csirkemellpaprikás házi tarhonya', 'Borsóleves'],
            ['Vadas csőtészta', 'Zöldbabfőzelék fasírozott', 'Gombás szelet rizs', 'Húsleves'],
            ['Sertéspaprikás tészta', 'Brokkoli főzelék fasírozott', 'Brassói aprópecsenye hasáb', 'Tojásleves'],
            ['Túrós tészta', 'Töltött paprika burgonya', 'Lecsós szelet nokedli', 'Zöldségleves'],
            ['', 'Csirkepaprikás tészta', '', 'Borsóleves'],
            ['', 'Rántott hús rizzsel', '', '-'],
        ];

        foreach ($menuk as $i => $etel) {
            Menu::create([
                'datum' => $kezdoDatum->copy()->addDays($i)->format('Y-m-d'),
                'foetel_A' => $etel[0],
                'foetel_B' => $etel[1],
                'foetel_C' => $etel[2],
                'leves' => $etel[3],
            ]);
        }
    }
}