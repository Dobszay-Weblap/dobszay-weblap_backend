<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        // FAHÁZAK - F1
        Room::create(['szoba_id' => 'F1/1', 'fahaz_id' => 'f1', 'nev' => '1. Faház', 'max' => 4, 'lakok' => []]);
        Room::create(['szoba_id' => 'F1/2', 'fahaz_id' => 'f1', 'nev' => '1. Faház', 'max' => 2, 'lakok' => []]);

        // FAHÁZAK - F2
        Room::create(['szoba_id' => 'F2/1', 'fahaz_id' => 'f2', 'nev' => '2. Faház', 'max' => 5, 'lakok' => []]);
        Room::create(['szoba_id' => 'F2/2', 'fahaz_id' => 'f2', 'nev' => '2. Faház', 'max' => 2, 'lakok' => []]);

        // FAHÁZAK - F3
        Room::create(['szoba_id' => 'F3/1', 'fahaz_id' => 'f3', 'nev' => '3. Faház', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'F3/2', 'fahaz_id' => 'f3', 'nev' => '3. Faház', 'max' => 3, 'lakok' => []]);

        // FAHÁZAK - F4
        Room::create(['szoba_id' => 'F4/1', 'fahaz_id' => 'f4', 'nev' => '4. Faház', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'F4/2', 'fahaz_id' => 'f4', 'nev' => '4. Faház', 'max' => 2, 'lakok' => []]);

        // FÖLDSZINT
        Room::create(['szoba_id' => 'Fszt1', 'fahaz_id' => null, 'nev' => 'Földszint 1', 'max' => 5, 'lakok' => []]);
        Room::create(['szoba_id' => 'Fszt2', 'fahaz_id' => null, 'nev' => 'Földszint 2', 'max' => 5, 'lakok' => []]);
        Room::create(['szoba_id' => 'Fszt3', 'fahaz_id' => null, 'nev' => 'Földszint 3', 'max' => 5, 'lakok' => []]);
        Room::create(['szoba_id' => 'Fszt4', 'fahaz_id' => null, 'nev' => 'Földszint 4', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Fszt5', 'fahaz_id' => null, 'nev' => 'Földszint 5', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Fszt6', 'fahaz_id' => null, 'nev' => 'Földszint 6', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Fszt7', 'fahaz_id' => null, 'nev' => 'Földszint 7', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Fszt8', 'fahaz_id' => null, 'nev' => 'Földszint 8', 'max' => 3, 'lakok' => []]);

        // EMELET
        Room::create(['szoba_id' => 'Em1', 'fahaz_id' => null, 'nev' => 'Emelet 1', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Em2', 'fahaz_id' => null, 'nev' => 'Emelet 2', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Em3', 'fahaz_id' => null, 'nev' => 'Emelet 3', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Em4', 'fahaz_id' => null, 'nev' => 'Emelet 4', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Em5', 'fahaz_id' => null, 'nev' => 'Emelet 5', 'max' => 5, 'lakok' => []]);
        Room::create(['szoba_id' => 'Em6', 'fahaz_id' => null, 'nev' => 'Emelet 6', 'max' => 5, 'lakok' => []]);
        Room::create(['szoba_id' => 'Em7', 'fahaz_id' => null, 'nev' => 'Emelet 7', 'max' => 5, 'lakok' => []]);
        Room::create(['szoba_id' => 'Em8', 'fahaz_id' => null, 'nev' => 'Emelet 8', 'max' => 3, 'lakok' => []]);

       // MÁSIK HÁZ - 3 nagy szoba
        Room::create(['szoba_id' => 'Bal', 'fahaz_id' => null, 'nev' => 'Bal oldal', 'max' => 2, 'lakok' => []]);
        Room::create(['szoba_id' => 'Kozep', 'fahaz_id' => null, 'nev' => 'Közép', 'max' => 3, 'lakok' => []]);
        Room::create(['szoba_id' => 'Jobb', 'fahaz_id' => null, 'nev' => 'Jobb oldal', 'max' => 2, 'lakok' => []]);

            }
}