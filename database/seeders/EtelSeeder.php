<?php

namespace Database\Seeders;

use App\Models\Etel;
use App\Models\Csoportok;
use App\Models\Beallitas;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EtelSeeder extends Seeder
{
    public function run(): void
    {
        $kezdoDatum = Carbon::create(
            Beallitas::where('kulcs', 'kezdo_datum')->value('ertek')
        );

        $csoportok = [
            'Ági', 'Mátéék', 'Lucáék', 'Tamasék', 'Zsófiék', 
            'Péterék', 'Dávid', 'Jánosék', 'Kláráék', 'Miklósék',
            'Eszterék', 'Katiék', 'Gergőék', 'Bálint', 'Mareszék',
            'Ritáék', 'Ambrusék', 'Balázsék', 'Julcsiék', 'Boriék',
            'Pannáék', 'Marci'
        ];

        // 7 nap (0-6)
        for ($nap = 0; $nap < 7; $nap++) {
            foreach ($csoportok as $csoportNev) {
                $csoport = Csoportok::where('nev', $csoportNev)->first();
                
                if (!$csoport) continue;

                Etel::create([
                    'csoport_id' => $csoport->id,
                    'nev' => $csoportNev,
                    'datum' => $kezdoDatum->copy()->addDays($nap)->format('Y-m-d'),
                    'adag_A' => $nap >= 5 ? null : 0, // Szombat-vasárnap null
                    'adag_B' => 0,
                    'adag_C' => $nap >= 5 ? null : 0,
                    'leves_adag' => ' ',
                ]);
            }
        }

        


/* //Hétfő
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
        ]); */
    }
}