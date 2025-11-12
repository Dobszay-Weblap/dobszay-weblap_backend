<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versenyszam extends Model
{
    use HasFactory;

    protected $table = 'versenyszamok';

    protected $fillable = [
        'indulok',
        'szul_ev',
        'evfolyam',
        'futas',
        'celbadobas',
        'sakk',
        'bicikli_futobicikli',
        'motor_biciklitura_gyerek',
        'rajz',
        'kincskereses',
        'uszas_uszogumi',
        'sup',
    ];

    protected $casts = [
        'szul_ev' => 'integer',
    ];
}