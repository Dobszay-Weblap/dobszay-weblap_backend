<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KorabbiEv extends Model
{
    protected $fillable = [
        'year',
        'kepek',
        'videok',
    ];

    protected $casts = [
        'kepek' => 'array', 
        'videok' => 'array',// A lakók adatainak JSON típusú tárolása
    ];

}
