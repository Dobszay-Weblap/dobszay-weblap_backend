<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szabaly extends Model
{
    protected $fillable = [
    'felso_cim',
    'also_cim',
    'gondnok_nev',
    'wifi_nev',
    'wifi_jelszo',
    'csendes_piheno',
    'malacszolgalat',
];
}
