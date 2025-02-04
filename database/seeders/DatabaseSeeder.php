<?php

namespace Database\Seeders;

use App\Models\familydata;
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

        //familydata::factory(10)->create();
        familydata::factory()->create([
            'nev' => 'Jóha Dorka Mária',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'ldorka@gmail.com',
            'skype' => 'ldorka',
            'csaladsorszam' => 0,
            'matebazsi_kod' => 2,
            'sor_szamlalo' => 1,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);

        familydata::factory()->create([
            'nev' => 'Jóha Dorka',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'lorka@gmail.com',
            'skype' => 'lorka',
            'csaladsorszam' => 1,
            'matebazsi_kod' => 4,
            'sor_szamlalo' => 1,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);

        familydata::factory()->create([
            'nev' => 'Dobszay Dorka Mária',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'dorka@gmail.com',
            'skype' => 'dorka',
            'csaladsorszam' => 3,
            'matebazsi_kod' => 35,
            'sor_szamlalo' => 1,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);

        familydata::factory()->create([
            'nev' => 'Kovács Dorka Mária',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'dobszaydorka@gmail.com',
            'skype' => 'dobszaydorka',
            'csaladsorszam' => 4,
            'matebazsi_kod' => 36,
            'sor_szamlalo' => 1,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);

        familydata::factory()->create([
            'nev' => 'Szabó Dorka Mária',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'kdorka@gmail.com',
            'skype' => 'kdorka',
            'csaladsorszam' => 2,
            'matebazsi_kod' => 37,
            'sor_szamlalo' => 1,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);
        familydata::factory()->create([
            'nev' => 'Szabó',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'kdork@gmail.com',
            'skype' => 'kdork',
            'csaladsorszam' => 5,
            'matebazsi_kod' => 45,
            'sor_szamlalo' => 1,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);
        familydata::factory()->create([
            'nev' => 'Szabó Dor Mária',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'kdora@gmail.com',
            'skype' => 'kdora',
            'csaladsorszam' => 6,
            'matebazsi_kod' => 40,
            'sor_szamlalo' => 11,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);
        familydata::factory()->create([
            'nev' => 'Szabó Mária',
            'mobil_telefonszam' => '+36 20 353 0331',
            'vonalas_telefon' => '',
            'cim' => '1037 Budapest,Tarhos utca 48.',
            'szuletesi_ev' => 2002,
            'szulinap' => '10.13',
            'nevnap' => '02.06',
            'email' => 'kdoka@gmail.com',
            'skype' => 'kdoka',
            'csaladsorszam' => 7,
            'matebazsi_kod' => 27,
            'sor_szamlalo' => 10,
            'becenev_sor' => '',
            'bankszamla' => '',
            'revolut_id' => '',
            'ki_ki' => 'unoka',
            'naptar' => null,
            'elso_generacio' => null,
            'unoka_generacio' => 1,
            'dedunoka_generacio' => null
        ]);



    }
}
