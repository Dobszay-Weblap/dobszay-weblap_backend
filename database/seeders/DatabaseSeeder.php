<?php

namespace Database\Seeders;

use App\Models\Beallitas;
use App\Models\Csoportok;
use App\Models\familydata;
use App\Models\Room;
use App\Models\User;
use App\Models\Etel;
use App\Models\Menu;
use App\Models\Szabaly;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        //szabályosk és infók
        Szabaly::create([
        'felso_cim' => 'Iskola utca ???',
        'also_cim' => 'Szigeti József u. 18',
        'gondnok_nev' => 'Zsuzsa telefon: ' ,
        'wifi_nev' => 'kaptalan',
        'wifi_jelszo' => '12341234',
        'csendes_piheno' => "nincs hangoskodás 13–15 h és 21 h-tól,\nez nem fedi le a kisbabák elvásását, ha lehet, többet is írjunk ki.\nMondd meg a kisbabások!",
        'malacszolgalat' => "Pohárjelölő, otthonról jellegzetes saját bögre stb...\nLehetőség szerint mindenki maga (családja) után mosogat (asszem ebben maradtunk)"
        ]);

        //Csoportok létrehozása
        $agiCsoport = Csoportok::create(['nev' => 'Ági']);
        $mateCsoport = Csoportok::create(['nev' => 'Mátéék']);
        $lucaCsoport = Csoportok::create(['nev' => 'Lucáék']);
        $tamasCsoport = Csoportok::create(['nev' => 'Tamásék']);
        $zsofiCsoport = Csoportok::create(['nev' => 'Zsófiék']);
        $peterCsoport = Csoportok::create(['nev' => 'Péterék']);
        $davidCsoport = Csoportok::create(['nev' => 'Dávid']);
        $janosCsoport = Csoportok::create(['nev' => 'Jánosék']);
        $klaraCsoport = Csoportok::create(['nev' => 'Kláráék']);
        $miklosCsoport = Csoportok::create(['nev' => 'Miklósék']);
        $eszterCsoport = Csoportok::create(['nev' => 'Eszterék']);
        $katiCsoport = Csoportok::create(['nev' => 'Katiék']);
        $gergoCsoport = Csoportok::create(['nev' => 'Gergőék']);
        $balintCsoport = Csoportok::create(['nev' => 'Bálint']);
        $mareszCsoport = Csoportok::create(['nev' => 'Mareszék']);
        $ritaCsoport = Csoportok::create(['nev' => 'Ritáék']);
        $ambrusCsoport = Csoportok::create(['nev' => 'Ambrusék']);
        $balazsCsoport = Csoportok::create(['nev' => 'Balázsék']);
        $julcsiCsoport = Csoportok::create(['nev' => 'Julcsiék']);
        $boriCsoport = Csoportok::create(['nev' => 'Boriék']);
        $pannaCsoport = Csoportok::create(['nev' => 'Pannák']);
        $marciCsoport = Csoportok::create(['nev' => 'Marci']);
        $etteremCsoport = Csoportok::create(['nev' => 'Virag étterem']);

        $agi = User::factory()->create([
          'name' => ' Dobszay Ágnes',
          'email' => 'dobszagi@gmail.com',
          'password' => Hash::make('123456'), // ⬅️ Hash::make()
          'jogosultsagi_szint' => 'felhasznalo',
      ]);

      $mate = User::factory()->create([
                'name' => 'Farkas Máté',
                'email' => 'reklamnelkul@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
            ]);

      $nelli = User::factory()->create([
                'name' => 'Szatmári Kornélia (Nelli)',
                'email' => 'nellisz@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
            ]);      

      $cfluca = User::factory()->create([
                'name' => 'Czakó-Farkas Luca Orsolya',
                'email' => 'farkaslucao@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $adorjan = User::factory()->create([
                'name' => 'Czakó Adorján',
                'email' => 'czako.adorjan@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $tamas = User::factory()->create([
                'name' => 'Dobszay Tamás',
                'email' => 'dobtam@freemail.hu',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $jutka = User::factory()->create([
                'name' => 'Dobszayné Hennel Judit',
                'email' => 'dobszay.judit@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $zsofi = User::factory()->create([
                'name' => 'Dobszay Zsófia',
                'email' => 'dobszayzsofi@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $andris = User::factory()->create([
                'name' => 'Bognár András Bálint',
                'email' => 'buundy@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $peter = User::factory()->create([
                'name' => 'Dobszay Péter',
                'email' => 'dobszay.peter@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $ili = User::factory()->create([
                'name' => 'Dobszay-Meskó Ilona',
                'email' => 'meskoilona@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $david = User::factory()->create([
                'name' => 'Dobszay Dávid',
                'email' => 'david.dobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $janos = User::factory()->create([
                'name' => 'Dobszay János',
                'email' => 'j.dobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $titi = User::factory()->create([
                'name' => 'Dobszay Jánosné (Titi)',
                'email' => 'dy.krisztina@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $klara = User::factory()->create([
                'name' => 'Huszka-Dobszay Klára',
                'email' => 'klara.huszka.dobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $hagoston = User::factory()->create([
                'name' => 'Huszka Ágoston',
                'email' => 'agoston.huszka@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $miklos = User::factory()->create([
                'name' => 'Dobszay Miklós',
                'email' => 'dobszaymiklos@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
            ]);

      $dtimi = User::factory()->create([
                'name' => 'Dobszayné Janto Timea',
                'email' => 'timcsussz@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $seszter = User::factory()->create([
                'name' => 'Steinbach-Dobszay Eszter',
                'email' => 'dobszayeszter@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $sagoston = User::factory()->create([
                'name' => 'Steinbach Ágoston',
                'email' => 'agoston.steinbach@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $kati = User::factory()->create([
                'name' => 'D. Szűcs-Dobszay Katalin',
                'email' => 'dobszykat@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
            ]);

      $szergely = User::factory()->create([
                'name' => 'D. Szűcs Gergely',
                'email' => 'gergely.dszucs@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $dorka = User::factory()->create([
                'name' => 'Dobszay Dorka',
                'email' => 'dobszaydorka@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
            ]);

      $gergo = User::factory()->create([
                'name' => 'Dobszay Gergely',
                'email' => 'gdobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $bea = User::factory()->create([
                'name' => 'Dobszayné Triff Beatrix',
                'email' => 'btriff15@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $balint = User::factory()->create([
                'name' => 'Dobszay Bálint',
                'email' => 'dobszi14@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $maresz = User::factory()->create([
                'name' => 'Dobszay Marcsi',
                'email' => 'marcsid96@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $fmagyas = User::factory()->create([
                'name' => 'Fitori Mátyás Bence',
                'email' => 'fitorimatyasbence@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $rita = User::factory()->create([
                'name' => 'Kalapos-Dobszay Rita',
                'email' => 'vancsi01@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $kpeter = User::factory()->create([
                'name' => 'Kalapos Péter',
                'email' => 'kalapos.peti@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $magyi = User::factory()->create([
                'name' => 'Dobszay Mátyás',
                'email' => 'dobszy21@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $ambrus = User::factory()->create([
                'name' => 'Dobszay Ambrus',
                'email' => 'dobszaya@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);
      $marcsi = User::factory()->create([
                'name' => 'Dobszay Ambrusné Marcsi',
                'email' => 'dmarcsi67@freemail.hu',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $balazs = User::factory()->create([
                'name' => 'Dobszay Balázs',
                'email' => 'dobszayb18@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);
      $ddeszter = User::factory()->create([
                'name' => 'Dobszay-Dudás Eszter Éva',
                'email' => 'desztiti@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $julcsi = User::factory()->create([
                'name' => 'Schulek-Tóthné Dobszay Julcsi',
                'email' => 'dobszayj14@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $balu = User::factory()->create([
                'name' => 'Schulek-Tóth Balázs',
                'email' => 'stbalu@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $bori = User::factory()->create([
                'name' => 'Dobszay Bori ',
                'email' => 'dobbori@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $dani = User::factory()->create([
                'name' => 'Incze Dániel',
                'email' => 'inczedani96@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $panna = User::factory()->create([
                'name' => 'Dobszay Anna',
                'email' => 'adobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $feri = User::factory()->create([
                'name' => 'Zatykó Ferenc',
                'email' => 'fzatyko@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $levi = User::factory()->create([
                'name' => 'Zatykó Levente',
                'email' => 'zatykolevente@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $ilus = User::factory()->create([
                'name' => 'Zatykó Ilona',
                'email' => 'zatykoilus@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $timi = User::factory()->create([
                'name' => 'Zatykó Tímea',
                'email' => 'zatykotimi@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $marci = User::factory()->create([
                'name' => 'Dobszay Márton Benedek',
                'email' => 'dobbmar@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
            ]);

      $etterem = User::factory()->create([
          'name' => 'Virág étterem',
          'email' => 'kati@gmail.hu',
          'password' => Hash::make('123456'), // ⬅️ Hash::make()
          'jogosultsagi_szint' => 'nezo',
      ]);

//Csoportok
        $agi->csoportok()->attach($agiCsoport->id);

        $mate->csoportok()->attach($mateCsoport->id);
        $nelli->csoportok()->attach($mateCsoport->id);

        $cfluca->csoportok()->attach($lucaCsoport->id);
        $adorjan->csoportok()->attach($lucaCsoport->id);

        $tamas->csoportok()->attach($tamasCsoport->id);
        $jutka->csoportok()->attach($tamasCsoport->id);

        $zsofi->csoportok()->attach($zsofiCsoport->id);
        $andris->csoportok()->attach($zsofiCsoport->id);

        $peter->csoportok()->attach($peterCsoport->id);
        $ili->csoportok()->attach($peterCsoport->id);

        $david->csoportok()->attach($davidCsoport->id);

        $janos->csoportok()->attach($janosCsoport->id);
        $titi->csoportok()->attach($janosCsoport->id);
        $dorka->csoportok()->attach($janosCsoport->id);

        $klara->csoportok()->attach($klaraCsoport->id);
        $hagoston->csoportok()->attach($klaraCsoport->id);

        $miklos->csoportok()->attach($miklosCsoport->id);
        $dtimi->csoportok()->attach($miklosCsoport->id);

        $seszter->csoportok()->attach($eszterCsoport->id);
        $sagoston->csoportok()->attach($eszterCsoport->id);

        $kati->csoportok()->attach($katiCsoport->id);
        $szergely->csoportok()->attach($katiCsoport->id);

        $gergo->csoportok()->attach($gergoCsoport->id);
        $bea->csoportok()->attach($gergoCsoport->id);
        $magyi->csoportok()->attach($gergoCsoport->id);

        $balint->csoportok()->attach($balintCsoport->id);

        $maresz->csoportok()->attach($mareszCsoport->id);
        $fmagyas->csoportok()->attach($mareszCsoport->id);

        $rita->csoportok()->attach($ritaCsoport->id);
        $kpeter->csoportok()->attach($ritaCsoport->id);

        $ambrus->csoportok()->attach($ambrusCsoport->id);
        $marcsi->csoportok()->attach($ambrusCsoport->id);

        $balazs->csoportok()->attach($balazsCsoport->id);
        $ddeszter->csoportok()->attach($balazsCsoport->id);

        $julcsi->csoportok()->attach($julcsiCsoport->id);
        $balu->csoportok()->attach($julcsiCsoport->id);

        $bori->csoportok()->attach($boriCsoport->id);
        $dani->csoportok()->attach($boriCsoport->id);

        $panna->csoportok()->attach($pannaCsoport->id);
        $feri->csoportok()->attach($pannaCsoport->id);
        $levi->csoportok()->attach($pannaCsoport->id);
        $ilus->csoportok()->attach($pannaCsoport->id);
        $timi->csoportok()->attach($pannaCsoport->id);

        $marci->csoportok()->attach($marciCsoport->id);

        $etterem->csoportok()->attach($etteremCsoport->id);

Beallitas::create([
    'kulcs' => 'kezdo_datum',
    'ertek' => '2025-07-01',
]);


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
        'datum' => $kezdoDatum->copy()->addDays($i)->format('Y-m-d'), // ⬅️ Y-m-d
        'foetel_A' => $etel[0],
        'foetel_B' => $etel[1],
        'foetel_C' => $etel[2],
        'leves' => $etel[3],
    ]);
}

//Hétfő
Etel::create([
            'csoport_id' => $agiCsoport->id,
            'nev' => 'Ági',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'), 
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mateCsoport->id,
            'nev' => 'Mátéék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $lucaCsoport->id,
            'nev' => 'Lucáék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $tamasCsoport->id,
            'nev' => 'Tamasék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $zsofiCsoport->id,
            'nev' => 'Zsófiék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'), 
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $peterCsoport->id,
            'nev' => 'Péterék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $davidCsoport->id,
            'nev' => 'Dávid',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $janosCsoport->id,
            'nev' => 'Jánosék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $klaraCsoport->id,
            'nev' => 'Kláráék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $miklosCsoport->id,
            'nev' => 'Miklósék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $eszterCsoport->id,
            'nev' => 'Eszterék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $katiCsoport->id,
            'nev' => 'Katiék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $gergoCsoport->id,
            'nev' => 'Gergőék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balintCsoport->id,
            'nev' => 'Bálint',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mareszCsoport->id,
            'nev' => 'Mareszék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ritaCsoport->id,
            'nev' => 'Ritáék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'), 
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ambrusCsoport->id,
            'nev' => 'Ambrusék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'), 
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Balázsék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Julcsiék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $boriCsoport->id,
            'nev' => 'Boriék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'), 
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $pannaCsoport->id,
            'nev' => 'Pannáék',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'), 
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $marciCsoport->id,
            'nev' => 'Marci',
            'datum' => $kezdoDatum->copy()->addDays(0)->format('Y-m-d'), 
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);

//Kedd
Etel::create([
            'csoport_id' => $agiCsoport->id,
            'nev' => 'Ági',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mateCsoport->id,
            'nev' => 'Mátéék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $lucaCsoport->id,
            'nev' => 'Lucáék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $tamasCsoport->id,
            'nev' => 'Tamasék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $zsofiCsoport->id,
            'nev' => 'Zsófiék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $peterCsoport->id,
            'nev' => 'Péterék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $davidCsoport->id,
            'nev' => 'Dávid',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $janosCsoport->id,
            'nev' => 'Jánosék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $klaraCsoport->id,
            'nev' => 'Kláráék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $miklosCsoport->id,
            'nev' => 'Miklósék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $eszterCsoport->id,
            'nev' => 'Eszterék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $katiCsoport->id,
            'nev' => 'Katiék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $gergoCsoport->id,
            'nev' => 'Gergőék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balintCsoport->id,
            'nev' => 'Bálint',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mareszCsoport->id,
            'nev' => 'Mareszék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ritaCsoport->id,
            'nev' => 'Ritáék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ambrusCsoport->id,
            'nev' => 'Ambrusék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balazsCsoport->id,
            'nev' => 'Balázsék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Julcsiék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $boriCsoport->id,
            'nev' => 'Boriék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $pannaCsoport->id,
            'nev' => 'Pannáék',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $marciCsoport->id,
            'nev' => 'Marci',
            'datum' => $kezdoDatum->copy()->addDays(1)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);

//Szerda
Etel::create([
            'csoport_id' => $agiCsoport->id,
            'nev' => 'Ági',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mateCsoport->id,
            'nev' => 'Mátéék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $lucaCsoport->id,
            'nev' => 'Lucáék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $tamasCsoport->id,
            'nev' => 'Tamasék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $zsofiCsoport->id,
            'nev' => 'Zsófiék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $peterCsoport->id,
            'nev' => 'Péterék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $davidCsoport->id,
            'nev' => 'Dávid',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $janosCsoport->id,
            'nev' => 'Jánosék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $klaraCsoport->id,
            'nev' => 'Kláráék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $miklosCsoport->id,
            'nev' => 'Miklósék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $eszterCsoport->id,
            'nev' => 'Eszterék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $katiCsoport->id,
            'nev' => 'Katiék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $gergoCsoport->id,
            'nev' => 'Gergőék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balintCsoport->id,
            'nev' => 'Bálint',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mareszCsoport->id,
            'nev' => 'Mareszék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ritaCsoport->id,
            'nev' => 'Ritáék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ambrusCsoport->id,
            'nev' => 'Ambrusék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balazsCsoport->id,
            'nev' => 'Balázsék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Julcsiék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $boriCsoport->id,
            'nev' => 'Boriék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $pannaCsoport->id,
            'nev' => 'Pannáék',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $marciCsoport->id,
            'nev' => 'Marci',
            'datum' => $kezdoDatum->copy()->addDays(2)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);

//Csütörtök
Etel::create([
            'csoport_id' => $agiCsoport->id,
            'nev' => 'Ági',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mateCsoport->id,
            'nev' => 'Mátéék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $lucaCsoport->id,
            'nev' => 'Lucáék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $tamasCsoport->id,
            'nev' => 'Tamasék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $zsofiCsoport->id,
            'nev' => 'Zsófiék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $peterCsoport->id,
            'nev' => 'Péterék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $davidCsoport->id,
            'nev' => 'Dávid',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $janosCsoport->id,
            'nev' => 'Jánosék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $klaraCsoport->id,
            'nev' => 'Kláráék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $miklosCsoport->id,
            'nev' => 'Miklósék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $eszterCsoport->id,
            'nev' => 'Eszterék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $katiCsoport->id,
            'nev' => 'Katiék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $gergoCsoport->id,
            'nev' => 'Gergőék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balintCsoport->id,
            'nev' => 'Bálint',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mareszCsoport->id,
            'nev' => 'Mareszék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ritaCsoport->id,
            'nev' => 'Ritáék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ambrusCsoport->id,
            'nev' => 'Ambrusék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balazsCsoport->id,
            'nev' => 'Balázsék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Julcsiék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $boriCsoport->id,
            'nev' => 'Boriék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $pannaCsoport->id,
            'nev' => 'Pannáék',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $marciCsoport->id,
            'nev' => 'Marci',
            'datum' => $kezdoDatum->copy()->addDays(3)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);

//Péntek
Etel::create([
            'csoport_id' => $agiCsoport->id,
            'nev' => 'Ági',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mateCsoport->id,
            'nev' => 'Mátéék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $lucaCsoport->id,
            'nev' => 'Lucáék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $tamasCsoport->id,
            'nev' => 'Tamasék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $zsofiCsoport->id,
            'nev' => 'Zsófiék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $peterCsoport->id,
            'nev' => 'Péterék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $davidCsoport->id,
            'nev' => 'Dávid',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $janosCsoport->id,
            'nev' => 'Jánosék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $klaraCsoport->id,
            'nev' => 'Kláráék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $miklosCsoport->id,
            'nev' => 'Miklósék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $eszterCsoport->id,
            'nev' => 'Eszterék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $katiCsoport->id,
            'nev' => 'Katiék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $gergoCsoport->id,
            'nev' => 'Gergőék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balintCsoport->id,
            'nev' => 'Bálint',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mareszCsoport->id,
            'nev' => 'Mareszék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ritaCsoport->id,
            'nev' => 'Ritáék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ambrusCsoport->id,
            'nev' => 'Ambrusék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balazsCsoport->id,
            'nev' => 'Balázsék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Julcsiék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $boriCsoport->id,
            'nev' => 'Boriék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $pannaCsoport->id,
            'nev' => 'Pannáék',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $marciCsoport->id,
            'nev' => 'Marci',
            'datum' => $kezdoDatum->copy()->addDays(4)->format('Y-m-d'),
            'adag_A' => 0,
            'adag_B' => 0,
            'adag_C' => 0,
            'leves_adag' => ' ',
        ]);

//Szombat
Etel::create([
            'csoport_id' => $agiCsoport->id,
            'nev' => 'Ági',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mateCsoport->id,
            'nev' => 'Mátéék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $lucaCsoport->id,
            'nev' => 'Lucáék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $tamasCsoport->id,
            'nev' => 'Tamasék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $zsofiCsoport->id,
            'nev' => 'Zsófiék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $peterCsoport->id,
            'nev' => 'Péterék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $davidCsoport->id,
            'nev' => 'Dávid',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $janosCsoport->id,
            'nev' => 'Jánosék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $klaraCsoport->id,
            'nev' => 'Kláráék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $miklosCsoport->id,
            'nev' => 'Miklósék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $eszterCsoport->id,
            'nev' => 'Eszterék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $katiCsoport->id,
            'nev' => 'Katiék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $gergoCsoport->id,
            'nev' => 'Gergőék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balintCsoport->id,
            'nev' => 'Bálint',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mareszCsoport->id,
            'nev' => 'Mareszék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ritaCsoport->id,
            'nev' => 'Ritáék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ambrusCsoport->id,
            'nev' => 'Ambrusék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balazsCsoport->id,
            'nev' => 'Balázsék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Julcsiék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $boriCsoport->id,
            'nev' => 'Boriék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $pannaCsoport->id,
            'nev' => 'Pannáék',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $marciCsoport->id,
            'nev' => 'Marci',
            'datum' => $kezdoDatum->copy()->addDays(5)->format('Y-m-d'),
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);

//Vasárnap
Etel::create([
            'csoport_id' => $agiCsoport->id,
            'nev' => 'Ági',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mateCsoport->id,
            'nev' => 'Mátéék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $lucaCsoport->id,
            'nev' => 'Lucáék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $tamasCsoport->id,
            'nev' => 'Tamasék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $zsofiCsoport->id,
            'nev' => 'Zsófiék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $peterCsoport->id,
            'nev' => 'Péterék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $davidCsoport->id,
            'nev' => 'Dávid',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $janosCsoport->id,
            'nev' => 'Jánosék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $klaraCsoport->id,
            'nev' => 'Kláráék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $miklosCsoport->id,
            'nev' => 'Miklósék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $eszterCsoport->id,
            'nev' => 'Eszterék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $katiCsoport->id,
            'nev' => 'Katiék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $gergoCsoport->id,
            'nev' => 'Gergőék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balintCsoport->id,
            'nev' => 'Bálint',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $mareszCsoport->id,
            'nev' => 'Mareszék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ritaCsoport->id,
            'nev' => 'Ritáék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $ambrusCsoport->id,
            'nev' => 'Ambrusék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $balazsCsoport->id,
            'nev' => 'Balázsék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $julcsiCsoport->id,
            'nev' => 'Julcsiék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $boriCsoport->id,
            'nev' => 'Boriék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $pannaCsoport->id,
            'nev' => 'Pannáék',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);
Etel::create([
            'csoport_id' => $marciCsoport->id,
            'nev' => 'Marci',
            'datum' => $kezdoDatum->copy()->addDays(6)->format('Y-m-d'), // 7. nap
            'adag_A' => null,
            'adag_B' => 0,
            'adag_C' => null,
            'leves_adag' => ' ',
        ]);

        //családi adatok felvitele
        familydata::factory()->create([
            'nev'=> 'Dobszayné Párdányi Klára',
            'mobil_telefonszam'=> '+36705720758',
            'vonalas_telefon'=> '0613150682',
            'cim'=> '1024 Budapest, Keleti K. u. 11/a',
            'szuletesi_ev'=> 1934,
            'szulinap'=> '12.31',
            'nevnap'=> '08.11.',
            'email'=> 'dobszaylaszlone@gmail.com',
            'skype'=> null,
            'csaladsorszam'=> 0,
            'matebazsi_kod'=> 0,
            'sor_szamlalo'=> 0,
            'becenev_sor'=> '',
            'bankszamla'=> '',
            'revolut_id'=> '',
            'ki_ki'=> '',
            'naptar'=> 1,
            'elso_generacio'=> null,
            'unoka_generacio'=> null,
            'dedunoka_generacio'=> null,
        ]);
        familydata::factory()->create([
            'nev'=>  'Dobszay Ágnes',
            'mobil_telefonszam'=>  '06305776005',
            'vonalas_telefon'=>  '',
            'cim'=>  '1039 Bp. Zsirai Miklós u. 15. 8/24',
            'szuletesi_ev'=> 1961,
            'szulinap'=>  '04.27.',
            'nevnap'=>  '01.21.',
            'email'=>  'dobszagi@gmail.com',
            'skype'=>  null,
            'csaladsorszam'=> 1,
            'matebazsi_kod'=> 1,
            'sor_szamlalo'=>  null,
            'becenev_sor'=>  '',
            'bankszamla'=>  '',
            'revolut_id'=>  '',
            'ki_ki'=>  '',
            'naptar'=> 1,
            'elso_generacio'=> 1,
            'unoka_generacio'=>  null,
            'dedunoka_generacio'=>  null,
       ]);

       familydata::factory()->create([
        'nev'=> 'Farkas Zoltán',
        'mobil_telefonszam'=> '+36302683000',
        'vonalas_telefon'=> '',
        'cim'=> null,
        'szuletesi_ev'=> 1964,
        'szulinap'=> '05.07',
        'nevnap'=> '03.08.',
        'email'=> 'mintordas@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 1,
        'matebazsi_kod'=> 10,
        'sor_szamlalo'=> 0,
        'becenev_sor'=> '',
        'bankszamla'=> '',
        'revolut_id'=> '',
        'ki_ki'=> '',
        'naptar'=> null,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
       ]);

       familydata::factory()->create([
        'nev'=> 'Farkas Máté',
        'mobil_telefonszam'=> '+36306776271',
        'vonalas_telefon'=> 3612472816,
        'cim'=> '1032 Budapest, Bécsi út 171. III./5a.',
        'szuletesi_ev'=> 1988,
        'szulinap'=> '06.24',
        'nevnap'=> '09.21',
        'email'=> 'reklamnelkul@gmail.com',
        'skype'=> 'fola8888',
        'csaladsorszam'=> 1,
        'matebazsi_kod'=> 11,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=> '11773030-00268817',
        'revolut_id'=> 'revolut.me/mto3pl8',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
       ]);
       
       familydata::factory()->create([
        'nev'=> 'Czakó-Farkas Luca Orsolya',
        'mobil_telefonszam'=> 636308832903,
        'vonalas_telefon'=> '',
        'cim'=> '2011 Budakalász Munkácsy Mihály utca 21',
        'szuletesi_ev'=> 1991,
        'szulinap'=> '11.08.',
        'nevnap'=> '12.13.',
        'email'=> 'farkaslucao@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 1,
        'matebazsi_kod'=> 12,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Czakó Adorján',
        'mobil_telefonszam'=> '06305831238',
        'vonalas_telefon'=> '',
        'cim'=> '2011 Budakalász Munkácsy Mihály utca 21',
        'szuletesi_ev'=> 1988,
        'szulinap'=> '01.08.',
        'nevnap'=> '03.05.',
        'email'=> 'czako.adorjan@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 1,
        'matebazsi_kod'=> 120,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Czakó Veronika Ágnes',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '2011 Budakalász Munkácsy Mihály utca 21',
        'szuletesi_ev'=> 2016,
        'szulinap'=> '08.30.',
        'nevnap'=> '01.13',
        'email'=> 'verusamanus@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 1,
        'matebazsi_kod'=> 121,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1

      ]);

       familydata::factory()->create([
        'nev'=> 'Czakó Rozália Éva',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '2011 Budakalász Munkácsy Mihály utca 21',
        'szuletesi_ev'=> 2018,
        'szulinap'=> '08.29.',
        'nevnap'=> '03.13.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 1,
        'matebazsi_kod'=> 122,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1

      ]);
       familydata::factory()->create([
        'nev'=> 'Czakó Adél Luca',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '2011 Budakalász Munkácsy Mihály utca 21',
        'szuletesi_ev'=> 2020,
        'szulinap'=> '12.21.',
        'nevnap'=> '01.29',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 1,
        'matebazsi_kod'=> 123,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Tamás',
        'mobil_telefonszam'=> '06303930685',
        'vonalas_telefon'=> 2571931,
        'cim'=> '1145 Bp. Törökőr u. 66.',
        'szuletesi_ev'=> 1962,
        'szulinap'=> '06.18.',
        'nevnap'=> '03.07',
        'email'=> 'dobtam@freemail.hu',
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 2,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 1,
        'naptar'=> 1,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
        'szulo_id' =>  1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszayné Hennel Judit',
        'mobil_telefonszam'=> '06307801321',
        'vonalas_telefon'=> 2571931,
        'cim'=> '1145 Bp. Törökőr u. 66.',
        'szuletesi_ev'=> null,
        'szulinap'=> '05.13.',
        'nevnap'=> '12.10.',
        'email'=> 'dobszay.judit@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 20,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> null,
        'naptar'=> null,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Zsófia',
        'mobil_telefonszam'=> '06203204756',
        'vonalas_telefon'=> '',
        'cim'=> '1118 Bp. Somlói út 5/B.',
        'szuletesi_ev'=> 1989,
        'szulinap'=> '02.05.',
        'nevnap'=> '05.15.',
        'email'=> 'dobszayzsofi@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 21,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Bognár András Bálint',
        'mobil_telefonszam'=> '06205989876',
        'vonalas_telefon'=> '',
        'cim'=> '1118 Bp. Somlói út 5/B.',
        'szuletesi_ev'=> 1987,
        'szulinap'=> '12.23.',
        'nevnap'=> '11.30.',
        'email'=> 'buundy@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 210,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Bognár Márton Bálint',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1118 Bp. Somlói út 5/B.',
        'szuletesi_ev'=> 2018,
        'szulinap'=> '10.11.',
        'nevnap'=> '11.11.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 211,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Bognár Mihály András',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1118 Bp. Somlói út 5/B.',
        'szuletesi_ev'=> 2020,
        'szulinap'=> '04.15.',
        'nevnap'=> '09.29.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 212,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Bognár Júlia Rita',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1118 Bp. Somlói út 5/B.',
        'szuletesi_ev'=> 2022,
        'szulinap'=> '10.26.',
        'nevnap'=> '05.22.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 213,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Péter',
        'mobil_telefonszam'=> '0670 6350052',
        'vonalas_telefon'=> '',
        'cim'=> '1158 Bp. Ady Endre utca 49./A',
        'szuletesi_ev'=> 1990,
        'szulinap'=> '11.13.',
        'nevnap'=> '06.29.',
        'email'=> 'dobszay.peter@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 22,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay-Meskó Ilona',
        'mobil_telefonszam'=> '0670 9421656',
        'vonalas_telefon'=> '',
        'cim'=> '1158 Bp. Ady Endre utca 49./A',
        'szuletesi_ev'=> 1981,
        'szulinap'=> '06.21.',
        'nevnap'=> '08.18.',
        'email'=> 'meskoilona@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 220,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-meny',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay László',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1158 Bp. Ady Endre utca 49./A',
        'szuletesi_ev'=> 2015,
        'szulinap'=> '04.27.',
        'nevnap'=> '06.27.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 221,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Anna',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1158 Bp. Ady Endre utca 49./A',
        'szuletesi_ev'=> 2017,
        'szulinap'=> '12.20.',
        'nevnap'=> '07.26.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 222,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Dávid',
        'mobil_telefonszam'=> '06307561817',
        'vonalas_telefon'=> 2571931,
        'cim'=> '1145 Bp. Törökőr u. 66.',
        'szuletesi_ev'=> 1993,
        'szulinap'=> '12.20.',
        'nevnap'=> '05.29.',
        'email'=> 'david.dobszay@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 2,
        'matebazsi_kod'=> 23,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay János',
        'mobil_telefonszam'=> '+36309506932',
        'vonalas_telefon'=> 3875535,
        'cim'=> '1037 Budapest, Tarhos utca 48.',
        'szuletesi_ev'=> 1963,
        'szulinap'=> '12.05.',
        'nevnap'=> '06.24.',
        'email'=> 'j.dobszay@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 3,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 1,
        'naptar'=> 1,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Jánosné (Titi)',
        'mobil_telefonszam'=> '+36302146103',
        'vonalas_telefon'=> 3875535,
        'cim'=> '1037 Budapest, Tarhos utca 48.',
        'szuletesi_ev'=> 1963,
        'szulinap'=> '12.20.',
        'nevnap'=> '08.05.',
        'email'=> 'dy.krisztina@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 30,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> null,
        'naptar'=> null,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Huszka-Dobszay Klára',
        'mobil_telefonszam'=> '+36204195036',
        'vonalas_telefon'=> '',
        'cim'=> '1037 Budapest, Pirkadat u. 27B',
        'szuletesi_ev'=> 1986,
        'szulinap'=> '04.11',
        'nevnap'=> '08.11',
        'email'=> 'klara.huszka.dobszay@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 31,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Huszka Ágoston',
        'mobil_telefonszam'=> '+36303483380',
        'vonalas_telefon'=> '',
        'cim'=> '1037 Budapest, Pirkadat u. 27B',
        'szuletesi_ev'=> 1985,
        'szulinap'=> '09.11',
        'nevnap'=> '08.28',
        'email'=> 'agoston.huszka@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 310,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Huszka Botond',
        'mobil_telefonszam'=> 36203308042,
        'vonalas_telefon'=> '',
        'cim'=> '1037 Budapest, Pirkadat u. 27B',
        'szuletesi_ev'=> 2011,
        'szulinap'=> '09.29.',
        'nevnap'=> '05. 16.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 311,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Huszka Csongor',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1037 Budapest, Pirkadat u. 27B',
        'szuletesi_ev'=> 2015,
        'szulinap'=> '12. 14.',
        'nevnap'=> '04.16.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 312,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Huszka Zsombor',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1037 Budapest, Pirkadat u. 27B',
        'szuletesi_ev'=> 2019,
        'szulinap'=> '04.26.',
        'nevnap'=> '11.08.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 313,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Miklós',
        'mobil_telefonszam'=> '0670 6719584',
        'vonalas_telefon'=> '',
        'cim'=> 'Pomáz Béke utca 11/N',
        'szuletesi_ev'=> 1987,
        'szulinap'=> '06.11.',
        'nevnap'=> '12.06.',
        'email'=> 'dobszaymiklos@gmail.com',
        'skype'=> 'dobszaymiklos',
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 32,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszayné Janto Timea',
        'mobil_telefonszam'=> '0630 8307185',
        'vonalas_telefon'=> '',
        'cim'=> 'Pomáz Béke utca 11/N',
        'szuletesi_ev'=> 1989,
        'szulinap'=> '10.03.',
        'nevnap'=> '05.03',
        'email'=> 'timcsussz@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 320,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-meny',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Lívia',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> 'Pomáz Béke utca 11/N',
        'szuletesi_ev'=> 2015,
        'szulinap'=> '03.17',
        'nevnap'=> '02.12',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 321,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Vilmos',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> 'Pomáz Béke utca 11/N',
        'szuletesi_ev'=> 2017,
        'szulinap'=> '01.08',
        'nevnap'=> '05.23',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 322,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Benjámin',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> 'Pomáz Béke utca 11/N',
        'szuletesi_ev'=> 2020,
        'szulinap'=> 12.27,
        'nevnap'=> '03.31.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 323,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Steinbach-Dobszay Eszter',
        'mobil_telefonszam'=> '+36209159234',
        'vonalas_telefon'=> '',
        'cim'=> '1038 Bp. Honvéd utca 18. Fsz. 2',
        'szuletesi_ev'=> 1990,
        'szulinap'=> '01.18',
        'nevnap'=> '05.24',
        'email'=> 'dobszayeszter@gmail.com',
        'skype'=> 'dobszay_eszter',
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 33,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Steinbach Ágoston',
        'mobil_telefonszam'=> '+36209159350\n +4915234709051',
        'vonalas_telefon'=> '',
        'cim'=> '1038 Bp. Honvéd utca 18. Fsz. 2',
        'szuletesi_ev'=> 1990,
        'szulinap'=> '03.13',
        'nevnap'=> '08.28',
        'email'=> 'agoston.steinbach@gmail.com',
        'skype'=> 'steinbach.agoston',
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 330,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Steinbach Borbála',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1038 Bp. Honvéd utca 18. Fsz. 2',
        'szuletesi_ev'=> 2017,
        'szulinap'=> '03.09',
        'nevnap'=> 12.04,
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 331,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Steinbach Balázs',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1038 Bp. Honvéd utca 18. Fsz. 2',
        'szuletesi_ev'=> 2018,
        'szulinap'=> '04.03',
        'nevnap'=> '02.03.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 332,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Steinbach Dávid',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1038 Bp. Honvéd utca 18. Fsz. 2',
        'szuletesi_ev'=> 2022,
        'szulinap'=> '04.06.',
        'nevnap'=> '12.30.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 333,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'D. Szűcs-Dobszay Katalin',
        'mobil_telefonszam'=> '+36202446739',
        'vonalas_telefon'=> '',
        'cim'=> '1117 Bp Alíz utca 6/b F épület 2/8',
        'szuletesi_ev'=> 1992,
        'szulinap'=> '09.18',
        'nevnap'=> '04.30',
        'email'=> 'dobszykat@gmail.com',
        'skype'=> 'dobszykat',
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 34,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'D. Szűcs Gergely',
        'mobil_telefonszam'=> '+36304677615',
        'vonalas_telefon'=> '',
        'cim'=> '1117 Bp Alíz utca 6/b F épület 2/8',
        'szuletesi_ev'=> 1990,
        'szulinap'=> '02.08',
        'nevnap'=> '05.09',
        'email'=> 'gergely.dszucs@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 340,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'D. Szűcs Ábel',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> 'Mennyország <3',
        'szuletesi_ev'=> 2018,
        'szulinap'=> 10.28,
        'nevnap'=> '',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 341,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'D. Szűcs Boglárka',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1117 Bp Alíz utca 6/b F épület 2/8',
        'szuletesi_ev'=> 2020,
        'szulinap'=> '03.19',
        'nevnap'=> '08.01',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 342,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'D. Szűcs Janka',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1117 Bp Alíz utca 6/b F épület 2/8',
        'szuletesi_ev'=> 2021,
        'szulinap'=> '11.29.',
        'nevnap'=> '05.30.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 343,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'D. Szűcs Bende',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1117 Bp Alíz utca 6/b F épület 2/8',
        'szuletesi_ev'=> 2024,
        'szulinap'=> 11.25,
        'nevnap'=> '04.14',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 344,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Dorka',
        'mobil_telefonszam'=> 36203530331,
        'vonalas_telefon'=> 3875535,
        'cim'=> '1037 Budapest, Tarhos 48.',
        'szuletesi_ev'=> 2002,
        'szulinap'=> '10.13.',
        'nevnap'=> '02.06.',
        'email'=> 'dobszaydorka@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 3,
        'matebazsi_kod'=> 35,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Gergely',
        'mobil_telefonszam'=> '+36202543455',
        'vonalas_telefon'=> '',
        'cim'=> '1162 Budapest, Kendermag utca 9.',
        'szuletesi_ev'=> 1965,
        'szulinap'=> '03.11.',
        'nevnap'=> '03.12.',
        'email'=> 'gdobszay@gmail.com',
        'skype'=> 'gdobszay',
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 4,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=> '11773140-08392101',
        'revolut_id'=> '',
        'ki_ki'=> 1,
        'naptar'=> 1,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszayné Triff Beatrix',
        'mobil_telefonszam'=> '+36202543485',
        'vonalas_telefon'=> '',
        'cim'=> '1162 Budapest, Kendermag utca 9.',
        'szuletesi_ev'=> 1966,
        'szulinap'=> '09.15.',
        'nevnap'=> '07.29.',
        'email'=> 'btriff15@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 40,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> null,
        'naptar'=> null,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Bálint',
        'mobil_telefonszam'=> '+36202543363',
        'vonalas_telefon'=> '',
        'cim'=> '1061 Budapest, Jókai tér 7. 3/28A',
        'szuletesi_ev'=> 1994,
        'szulinap'=> '04.14.',
        'nevnap'=> '02.14.',
        'email'=> 'dobszi14@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 41,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Marcsi',
        'mobil_telefonszam'=> '+36202543862',
        'vonalas_telefon'=> '',
        'cim'=> '1043 Budapest, Kassai utca 21.',
        'szuletesi_ev'=> 1996,
        'szulinap'=> '04.05.',
        'nevnap'=> '07.01.',
        'email'=> 'marcsid96@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 42,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Fitori Mátyás Bence',
        'mobil_telefonszam'=> 36306485504,
        'vonalas_telefon'=> '',
        'cim'=> '2151 Fót, Széchenyi I. u. 41.',
        'szuletesi_ev'=> 1993,
        'szulinap'=> '05.25.',
        'nevnap'=> '02.24.',
        'email'=> 'fitorimatyasbence@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 420,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Fitori Kinga',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1043 Budapest, Kassai utca 21.',
        'szuletesi_ev'=> 2023,
        'szulinap'=> '08.17',
        'nevnap'=> '07.24',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 421,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Kalapos-Dobszay Rita',
        'mobil_telefonszam'=> '+36202544871',
        'vonalas_telefon'=> '(+41779040863)',
        'cim'=> '1162 Budapest, Kendermag utca 9.',
        'szuletesi_ev'=> 1998,
        'szulinap'=> '10.12.',
        'nevnap'=> '05.22.',
        'email'=> 'vancsi01@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 43,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Kalapos Péter',
        'mobil_telefonszam'=> '+36205410448',
        'vonalas_telefon'=> '',
        'cim'=> '1193 Budapest, Deák Ferenc utca 64.',
        'szuletesi_ev'=> 1998,
        'szulinap'=> '06.26',
        'nevnap'=> '04.29',
        'email'=> 'kalapos.peti@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 430,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Mátyás',
        'mobil_telefonszam'=> '+36202545128',
        'vonalas_telefon'=> '',
        'cim'=> '1162 Budapest, Kendermag utca 9.',
        'szuletesi_ev'=> 2005,
        'szulinap'=> '10.24.',
        'nevnap'=> '02.24.',
        'email'=> 'dobszy21@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 4,
        'matebazsi_kod'=> 44,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Ambrus',
        'mobil_telefonszam'=> '06204348158',
        'vonalas_telefon'=> 3623341097,
        'cim'=> '1132, Budapest, Kresz Géza utca 44/46 III/24.',
        'szuletesi_ev'=> 1966,
        'szulinap'=> '12.04.',
        'nevnap'=> '04.04.',
        'email'=> 'dobszaya@gmail.com',
        'skype'=> 'dobszaya18',
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 5,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 1,
        'naptar'=> 1,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Ambrusné Marcsi',
        'mobil_telefonszam'=> '06209346420',
        'vonalas_telefon'=> '0623341097',
        'cim'=> '1132, Budapest, Kresz Géza utca 44/46 III/24.',
        'szuletesi_ev'=> 1967,
        'szulinap'=> '11.18.',
        'nevnap'=> '07.26.',
        'email'=> 'dmarcsi67@freemail.hu',
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 50,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> null,
        'naptar'=> null,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Balázs',
        'mobil_telefonszam'=> '06204393018',
        'vonalas_telefon'=> '-',
        'cim'=> '9090 Pannonhalma, Rákóczi Ferenc u. 9.',
        'szuletesi_ev'=> 1991,
        'szulinap'=> '05.18.',
        'nevnap'=> '02.03',
        'email'=> 'dobszayb18@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 51,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay-Dudás Eszter Éva',
        'mobil_telefonszam'=> '06303949882',
        'vonalas_telefon'=> '-',
        'cim'=> '9090 Pannonhalma, Rákóczi Ferenc u. 9.',
        'szuletesi_ev'=> 1992,
        'szulinap'=> '04.08.',
        'nevnap'=> '05.24.',
        'email'=> 'desztiti@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 510,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-meny',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Boldizsár',
        'mobil_telefonszam'=> 'Nincs!',
        'vonalas_telefon'=> '',
        'cim'=> '9090 Pannonhalma, Rákóczi Ferenc u. 9.',
        'szuletesi_ev'=> 2016,
        'szulinap'=> '12.18.',
        'nevnap'=> '01.06',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 511,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Éva',
        'mobil_telefonszam'=> 'Nincs!',
        'vonalas_telefon'=> '',
        'cim'=> '9090 Pannonhalma, Rákóczi Ferenc u. 9.',
        'szuletesi_ev'=> 2020,
        'szulinap'=> '03.22.',
        'nevnap'=> '12.24.',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 512,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Luca',
        'mobil_telefonszam'=> 'Nincs!',
        'vonalas_telefon'=> '',
        'cim'=> '9090 Pannonhalma, Rákóczi Ferenc u. 9.',
        'szuletesi_ev'=> '2021.',
        'szulinap'=> 11.01,
        'nevnap'=> 12.13,
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 513,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Schulek-Tóthné Dobszay Julcsi',
        'mobil_telefonszam'=> '06204079850',
        'vonalas_telefon'=> '',
        'cim'=> '1022 Budapest Felvinci út 12. (2072 Zsámbék Szilágyság u. 1.)',
        'szuletesi_ev'=> 1994,
        'szulinap'=> '06.18',
        'nevnap'=> '05.22',
        'email'=> 'dobszayj14@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 52,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> 1,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Schulek-Tóth Balázs',
        'mobil_telefonszam'=> '06202252312',
        'vonalas_telefon'=> '',
        'cim'=> '1022 Budapest Felvinci út 12. (1111 Budapest, Bartók Béla út 10-12.)',
        'szuletesi_ev'=> 1989,
        'szulinap'=> '04.22',
        'nevnap'=> '02.03',
        'email'=> 'stbalu@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 520,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Schulek-Tóth Barnabás',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '1022 Budapest Felvinci út 12. (2072 Zsámbék Szilágyság u. 1.)',
        'szuletesi_ev'=> 2025,
        'szulinap'=> '01.03.',
        'nevnap'=> '06.11',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 521,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Bori',
        'mobil_telefonszam'=> '06209320945',
        'vonalas_telefon'=> '',
        'cim'=> '2072 Zsámbék Szilágyság utca 1',
        'szuletesi_ev'=> 1997,
        'szulinap'=> '03.28.',
        'nevnap'=> '12.04.',
        'email'=> 'dobbori@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 53,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Incze Dániel',
        'mobil_telefonszam'=> '06205524568',
        'vonalas_telefon'=> '',
        'cim'=> '2072 Zsámbék Szilágyság utca 1',
        'szuletesi_ev'=> 1996,
        'szulinap'=> 10.24,
        'nevnap'=> '07.21',
        'email'=> 'inczedani96@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 530,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno-vej',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Incze János Benedek',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '2072 Zsámbék Szilágyság utca 1',
        'szuletesi_ev'=> 2022,
        'szulinap'=> 12.27,
        'nevnap'=> '06.24',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 531,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Incze Soma Ambrus',
       'mobil_telefonszam'=>  null,
        'vonalas_telefon'=> '',
        'cim'=> '',
        'szuletesi_ev'=> 2024,
        'szulinap'=> 12.08,
        'nevnap'=> '',
        'email'=> null,
        'skype'=> null,
        'csaladsorszam'=> 5,
        'matebazsi_kod'=> 532,
        'sor_szamlalo'=> null,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'dédu',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> 1
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Anna',
        'mobil_telefonszam'=> '+36204234599',
        'vonalas_telefon'=> '',
        'cim'=> '2013 Pomáz, Török Ignác u. 15.',
        'szuletesi_ev'=> 1971,
        'szulinap'=> '06.17.',
        'nevnap'=> '07.26.',
        'email'=> 'adobszay@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 6,
        'matebazsi_kod'=> 6,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=> '10700392-11712303-51100005',
        'revolut_id'=> '',
        'ki_ki'=> 1,
        'naptar'=> 1,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Zatykó Ferenc',
        'mobil_telefonszam'=> '+36306675253',
        'vonalas_telefon'=> '',
        'cim'=> '2016 Leányfalu, Pacsirta utca 4.',
        'szuletesi_ev'=> 1971,
        'szulinap'=> '04.27.',
        'nevnap'=> '12.03.',
        'email'=> 'fzatyko@gmail.com',
        'skype'=> 'fzatyko',
        'csaladsorszam'=> 6,
        'matebazsi_kod'=> 60,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> null,
        'naptar'=> null,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Zatykó Levente',
        'mobil_telefonszam'=> '+36202806703',
        'vonalas_telefon'=> '',
        'cim'=> '2013 Pomáz, Török Ignác u. 15.',
        'szuletesi_ev'=> 2001,
        'szulinap'=> '02.28.',
        'nevnap'=> '06.18.',
        'email'=> 'zatykolevente@gmail.com',
        'skype'=> 'levipehell',
        'csaladsorszam'=> 6,
        'matebazsi_kod'=> 61,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Zatykó Ilona',
        'mobil_telefonszam'=> '+36203147582',
        'vonalas_telefon'=> '',
        'cim'=> '2013 Pomáz, Török Ignác u. 15.',
        'szuletesi_ev'=> 2003,
        'szulinap'=> '03.21.',
        'nevnap'=> '08.18.',
        'email'=> 'zatykoilus@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 6,
        'matebazsi_kod'=> 62,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Zatykó Tímea',
        'mobil_telefonszam'=> '+36209231080',
        'vonalas_telefon'=> '',
        'cim'=> '2013 Pomáz, Török Ignác u. 15.',
        'szuletesi_ev'=> 2005,
        'szulinap'=> '12.02.',
        'nevnap'=> '05.03.',
        'email'=> 'zatykotimi@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 6,
        'matebazsi_kod'=> 63,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 'uno',
        'naptar'=> null,
        'elso_generacio'=> null,
        'unoka_generacio'=> 1,
        'dedunoka_generacio'=> null,
      ]);
       familydata::factory()->create([
        'nev'=> 'Dobszay Márton Benedek',
        'mobil_telefonszam'=> '+36208232432',
        'vonalas_telefon'=> '',
        'cim'=> '1053 Budapest, Ferenciek tere 9.',
        'szuletesi_ev'=> 1975,
        'szulinap'=> '02.08.',
        'nevnap'=> '11.11.',
        'email'=> 'dobbmar@gmail.com',
        'skype'=> null,
        'csaladsorszam'=> 7,
        'matebazsi_kod'=> 7,
        'sor_szamlalo'=> 1,
        'becenev_sor'=> '',
        'bankszamla'=>  '',
        'revolut_id'=> '',
        'ki_ki'=> 1,
        'naptar'=> 1,
        'elso_generacio'=> 1,
        'unoka_generacio'=> null,
        'dedunoka_generacio'=> null,
      ]);


        Room::factory()->create([
            'szoba_id' => 'F1/1',
            'nev' => '1. Faház',
            'max' => 2,
            'lakok' => ['Bori', 'Dani', 'János', 'Soma']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F1/2',
            'max' => 2,
            'lakok' => ['Ambrus']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F2/1',
            'nev' => '2. Faház',
            'max' => 2,
            'lakok' => ['Zsófi', 'Andris', 'Marci', 'Misi', 'Júlia']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F2/2',
            'max' => 2,
            'lakok' => ['']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F3/1',
            'nev' => '3. Faház',
            'max' => 2,
            'lakok' => ['Marcsi', 'F. Matyi', 'Kinga']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F3/2',
            'max' => 2,
            'lakok' => ['Bálint', 'Rita', 'K. Peti']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F4/1',
            'nev' => '4. Faház',
            'max' => 2,
            'lakok' => ['Luca', 'Adorján', 'Veronika']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F4/2',
            'max' => 2,
            'lakok' => ['Rozália', 'Adél']
        ]);

        Room::factory()->create([
            'szoba_id' => 'Fszt1',
            'max' => 3,
            'lakok' => ['Miklós', 'Timi', 'Lívia', 'Vili', 'Beni']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Fszt2',
            'max' => 3,
            'lakok' => ['Balázs', 'Eszter', 'Boldizsár', 'Éva', 'Luca']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Fszt3',
            'max' => 3,
            'lakok' => ['Kati', 'Szergely', 'Bogi', 'Janka', 'Beni']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Fszt4',
            'max' => 3,
            'lakok' => ['Julcsi', 'Balu', 'Barnus']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Fszt5',
            'max' => 3,
            'lakok' => ['Levi']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Fszt6',
            'max' => 3,
            'lakok' => ['Nelli, Máté']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Fszt7',
            'max' => 3,
            'lakok' => ['Dávid']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Fszt8',
            'max' => 3,
            'lakok' => ['Marci']
        ]);

        Room::factory()->create([
            'szoba_id' => 'Em1',
            'max' => 3,
            'lakok' => ['Ági']
        ]);
        Room::factory()->create([
            'szoba_id' => 'Em2',
            'max' => 3,
            'lakok' => ['Panna, Feri']
        ]);
        Room::factory()->create([
            'szoba_id' => 'E3',
            'max' => 3,
            'lakok' => ['Bea, Gergő, Matyi']
        ]);
        Room::factory()->create([
            'szoba_id' => 'E4',
            'max' => 3,
            'lakok' => ['János, Titi']
        ]);
        Room::factory()->create([
            'szoba_id' => 'E5',
            'max' => 3,
            'lakok' => ['Klára, Ágoston, Botond, Csongor, Zsombor']
        ]);
        Room::factory()->create([
            'szoba_id' => 'E6',
            'max' => 3,
            'lakok' => ['Péter, Ili, Lackó, Anna']
        ]);
        Room::factory()->create([
            'szoba_id' => 'E7',
            'max' => 3,
            'lakok' => ['Eszter, Ágostos, Bori, BAlázs, Dávid']
        ]);
        Room::factory()->create([
            'szoba_id' => 'E8',
            'max' => 3,
            'lakok' => ['Dorka, Ilus, Timi']
        ]);


    }
}
