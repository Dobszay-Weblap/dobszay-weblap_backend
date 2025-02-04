<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    use HasFactory;

    protected $fillable = [
        'szoba_id',
        'nev',
        'max',
        'lakok',
    ];

    protected $casts = [
        'lakok' => 'array', // A lakók adatainak JSON típusú tárolása
    ];


}
