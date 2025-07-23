<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etel extends Model
{
    protected $fillable = ['nev', 'adag_A', 'adag_B', 'adag_C', 'leves_adag', 'csoport_id'];


    public function csoport()
{
    return $this->belongsTo(Csoportok::class, 'csoport_id');
}
}


