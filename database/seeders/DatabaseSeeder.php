<?php

namespace Database\Seeders;

use App\Models\familydata;
use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'dorka@gmail.hu',
            'password' => '123456',
            'jogosultsagi_szint' => 'felhasznalo',
        ]);

        User::factory()->create([
            'name' => 'Test ',
            'email' => 'kati@gmail.hu',
            'password' => '123456',
            'jogosultsagi_szint' => 'felhasznalo',
        ]);


        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'dobszay@gmail.hu',
            'password' => '1234567',
            'jogosultsagi_szint' => 'admin',
        ]);

        //familydata::factory(10)->create();
        familydata::factory()->create([
            ‘nev’: ‘Dobszayné Párdányi Klára’,
            ‘mobil_telefonszam’: ‘+36705720758’,
            ‘vonalas_telefon’: ‘0613150682’,
            ‘cim’: ‘1024 Budapest, Keleti K. u. 11/a’,
            ‘szuletesi_ev’: 1934,
            ‘szulinap’: ’12.31’,
            ‘nevnap’: ‘08.11.’,
            ‘email’: ‘dobszaylaszlone@gmail.com’,
            ‘skype’: ‘’,
            ‘csaladsorszam’: 0,
            ‘matebazsi_kod’: 0,
            ‘sor_szamlalo’: 0,
            ‘becenev_sor’: ‘’,
            ‘bankszamla’: ‘’,
            ‘revolut_id’: ‘’,
            ‘ki_ki’: ‘’,
            ‘naptar’: 1,
            ‘elso_generacio’: ‘’,
            ‘unoka_generacio’: ‘’,
            ‘dedunoka_generacio’: ‘’
            'szulo_id' =>  null
          ])


 



        Room::factory()->create([
            'szoba_id' => 'F1/1',
            'nev' => '1. Faház',
            'max' => 2,
            'lakok' => ['Eszter', 'Buszti', 'Sajka']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F1/2',
            'max' => 2,
            'lakok' => ['Dávid']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F2/1',
            'nev' => '2. Faház',
            'max' => 2,
            'lakok' => ['Luca', 'Adorján']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F2/2',
            'max' => 2,
            'lakok' => ['Veronika', 'Rozi', 'Adél']
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
            'lakok' => ['Bálint', 'Noémi']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F3/3',
            'max' => 1,
            'lakok' => ['Matyi']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F4/1',
            'nev' => '4. Faház',
            'max' => 2,
            'lakok' => ['Miklós', 'Timi', 'Beni']
        ]);

        Room::factory()->create([
            'szoba_id' => 'F4/2',
            'max' => 2,
            'lakok' => ['Lívia', 'Vili']
        ]);

        Room::factory()->create([
            'szoba_id' => 'Fszt1',
            'max' => 3,
            'lakok' => ['Zsófi', 'András', 'Marci', 'Misi', 'Juli']
        ]);



    }
}
