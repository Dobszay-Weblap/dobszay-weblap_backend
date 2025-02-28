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
        'ki_ki',
        'naptar',
        'elso_generacio',
        'unoka_generacio',
        'dedunoka_generacio',
        'szulo_id',
    ];

    public function szulo()
    {
        return $this->belongsTo(FamilyData::class, 'szulo_id');
    }

    public function gyerekek()
    {
        return $this->hasMany(FamilyData::class, 'szulo_id');
    }
}
