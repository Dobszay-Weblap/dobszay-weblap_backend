<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Csoportok;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $agiCsoport = Csoportok::where('nev', 'Ági')->first();
        $mateCsoport = Csoportok::where('nev', 'Mátéék')->first();
        $lucaCsoport = Csoportok::where('nev', 'Lucáék')->first();
        $tamasCsoport = Csoportok::where('nev', 'Tamásék')->first();
        $zsofiCsoport = Csoportok::where('nev', 'Zsófiék')->first();
        $peterCsoport = Csoportok::where('nev', 'Péterék')->first();
        $davidCsoport = Csoportok::where('nev', 'Dávid')->first();
        $janosCsoport = Csoportok::where('nev', 'Jánosék')->first();
        $klaraCsoport = Csoportok::where('nev', 'Kláráék')->first();
        $miklosCsoport = Csoportok::where('nev', 'Miklósék')->first();
        $eszterCsoport = Csoportok::where('nev', 'Eszterék')->first();
        $katiCsoport = Csoportok::where('nev', 'Katiék')->first();
        $dorkaCsoport = Csoportok::where('nev', 'Dorka')->first();
        $gergoCsoport = Csoportok::where('nev', 'Gergőék')->first();
        $balintCsoport = Csoportok::where('nev', 'Bálint')->first();
        $mareszCsoport = Csoportok::where('nev', 'Mareszék')->first();
        $ritaCsoport = Csoportok::where('nev', 'Ritáék')->first();
        $ambrusCsoport = Csoportok::where('nev', 'Ambrusék')->first();
        $balazsCsoport = Csoportok::where('nev', 'Balázsék')->first();
        $julcsiCsoport = Csoportok::where('nev', 'Julcsiék')->first();
        $boriCsoport = Csoportok::where('nev', 'Boriék')->first();
        $pannaCsoport = Csoportok::where('nev', 'Pannáék')->first();
        $marciCsoport = Csoportok::where('nev', 'Marci')->first();
        $etteremCsoport = Csoportok::where('nev', 'Virág étterem')->first();

        $agi = User::factory()->create([
          'name' => ' Dobszay Ágnes',
          'email' => 'dobszagi@gmail.com',
          'password' => Hash::make('123456'), // ⬅️ Hash::make()
          'jogosultsagi_szint' => 'felhasznalo',
          'password_changed' => false,
      ]);

      $mate = User::factory()->create([
                'name' => 'Farkas Máté',
                'email' => 'reklamnelkul@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
                'password_changed' => false,
            ]);

      $nelli = User::factory()->create([
                'name' => 'Szatmári Kornélia (Nelli)',
                'email' => 'nellisz@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);      

      $cfluca = User::factory()->create([
                'name' => 'Czakó-Farkas Luca Orsolya',
                'email' => 'farkaslucao@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $adorjan = User::factory()->create([
                'name' => 'Czakó Adorján',
                'email' => 'czako.adorjan@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $tamas = User::factory()->create([
                'name' => 'Dobszay Tamás',
                'email' => 'dobtam@freemail.hu',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $jutka = User::factory()->create([
                'name' => 'Dobszayné Hennel Judit',
                'email' => 'dobszay.judit@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $zsofi = User::factory()->create([
                'name' => 'Dobszay Zsófia',
                'email' => 'dobszayzsofi@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $andris = User::factory()->create([
                'name' => 'Bognár András Bálint',
                'email' => 'buundy@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $peter = User::factory()->create([
                'name' => 'Dobszay Péter',
                'email' => 'dobszay.peter@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $ili = User::factory()->create([
                'name' => 'Dobszay-Meskó Ilona',
                'email' => 'meskoilona@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $david = User::factory()->create([
                'name' => 'Dobszay Dávid',
                'email' => 'david.dobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $janos = User::factory()->create([
                'name' => 'Dobszay János',
                'email' => 'j.dobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $titi = User::factory()->create([
                'name' => 'Dobszay Jánosné (Titi)',
                'email' => 'dy.krisztina@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $klara = User::factory()->create([
                'name' => 'Huszka-Dobszay Klára',
                'email' => 'klara.huszka.dobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $hagoston = User::factory()->create([
                'name' => 'Huszka Ágoston',
                'email' => 'agoston.huszka@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $miklos = User::factory()->create([
                'name' => 'Dobszay Miklós',
                'email' => 'dobszaymiklos@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
                'password_changed' => false,
            ]);

      $dtimi = User::factory()->create([
                'name' => 'Dobszayné Janto Timea',
                'email' => 'timcsussz@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $seszter = User::factory()->create([
                'name' => 'Steinbach-Dobszay Eszter',
                'email' => 'dobszayeszter@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $sagoston = User::factory()->create([
                'name' => 'Steinbach Ágoston',
                'email' => 'agoston.steinbach@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $kati = User::factory()->create([
                'name' => 'D. Szűcs-Dobszay Katalin',
                'email' => 'dobszykat@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
                'password_changed' => false,
            ]);

      $szergely = User::factory()->create([
                'name' => 'D. Szűcs Gergely',
                'email' => 'gergely.dszucs@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $dorka = User::factory()->create([
                'name' => 'Dobszay Dorka',
                'email' => 'dobszaydorka@gmail.com',
                'password' => Hash::make('12345678'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'admin',
                'password_changed' => false,
            ]);

      $gergo = User::factory()->create([
                'name' => 'Dobszay Gergely',
                'email' => 'gdobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $bea = User::factory()->create([
                'name' => 'Dobszayné Triff Beatrix',
                'email' => 'btriff15@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $balint = User::factory()->create([
                'name' => 'Dobszay Bálint',
                'email' => 'dobszi14@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $maresz = User::factory()->create([
                'name' => 'Dobszay Marcsi',
                'email' => 'marcsid96@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $fmagyas = User::factory()->create([
                'name' => 'Fitori Mátyás Bence',
                'email' => 'fitorimatyasbence@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $rita = User::factory()->create([
                'name' => 'Kalapos-Dobszay Rita',
                'email' => 'vancsi01@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $kpeter = User::factory()->create([
                'name' => 'Kalapos Péter',
                'email' => 'kalapos.peti@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $magyi = User::factory()->create([
                'name' => 'Dobszay Mátyás',
                'email' => 'dobszy21@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $ambrus = User::factory()->create([
                'name' => 'Dobszay Ambrus',
                'email' => 'dobszaya@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);
      $marcsi = User::factory()->create([
                'name' => 'Dobszay Ambrusné Marcsi',
                'email' => 'dmarcsi67@freemail.hu',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $balazs = User::factory()->create([
                'name' => 'Dobszay Balázs',
                'email' => 'dobszayb18@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);
      $ddeszter = User::factory()->create([
                'name' => 'Dobszay-Dudás Eszter Éva',
                'email' => 'desztiti@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $julcsi = User::factory()->create([
                'name' => 'Schulek-Tóthné Dobszay Julcsi',
                'email' => 'dobszayj14@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $balu = User::factory()->create([
                'name' => 'Schulek-Tóth Balázs',
                'email' => 'stbalu@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $bori = User::factory()->create([
                'name' => 'Dobszay Bori ',
                'email' => 'dobbori@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $dani = User::factory()->create([
                'name' => 'Incze Dániel',
                'email' => 'inczedani96@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $panna = User::factory()->create([
                'name' => 'Dobszay Anna',
                'email' => 'adobszay@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $feri = User::factory()->create([
                'name' => 'Zatykó Ferenc',
                'email' => 'fzatyko@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $levi = User::factory()->create([
                'name' => 'Zatykó Levente',
                'email' => 'zatykolevente@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $ilus = User::factory()->create([
                'name' => 'Zatykó Ilona',
                'email' => 'zatykoilus@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $timi = User::factory()->create([
                'name' => 'Zatykó Tímea',
                'email' => 'zatykotimi@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $marci = User::factory()->create([
                'name' => 'Dobszay Márton Benedek',
                'email' => 'dobbmar@gmail.com',
                'password' => Hash::make('123456'), // ⬅️ Hash::make()
                'jogosultsagi_szint' => 'felhasznalo',
                'password_changed' => false,
            ]);

      $etterem = User::factory()->create([
          'name' => 'Virág étterem',
          'email' => 'kati@gmail.hu',
          'password' => Hash::make('123456'), // ⬅️ Hash::make()
          'jogosultsagi_szint' => 'nezo',
          'password_changed' => true,
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
        
        $klara->csoportok()->attach($klaraCsoport->id);
        $hagoston->csoportok()->attach($klaraCsoport->id);

        $miklos->csoportok()->attach($miklosCsoport->id);
        $dtimi->csoportok()->attach($miklosCsoport->id);

        $seszter->csoportok()->attach($eszterCsoport->id);
        $sagoston->csoportok()->attach($eszterCsoport->id);

        $kati->csoportok()->attach($katiCsoport->id);
        $szergely->csoportok()->attach($katiCsoport->id);

        $dorka->csoportok()->attach($dorkaCsoport->id);

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

    }
}