<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyData extends Model
{
    use HasFactory;

    protected $table = 'familydatas'; // Ha az alapértelmezett többesszám nem megfelelő

    protected $fillable = [
        'nev',
        'mobil_telefonszam',
        'vonalas_telefon',
        'cim',
        'szuletesi_ev',
        'szulinap',
        'nevnap',
        'email',
        'skype',
        'csaladsorszam',
        'matebazsi_kod',
        'sor_szamlalo',
        'becenev_sor',
        'bankszamla',
        'revolut_id',
        'naptar',
        'elso_generacio',
        'unoka_generacio',
        'dedunoka_generacio',
    ];
}
