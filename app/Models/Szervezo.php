<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szervezo extends Model
{
    use HasFactory;

    protected $table = 'szervezok';

    protected $fillable = [
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

}
