<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Csoportok extends Model
{
     protected $table = 'csoportoks'; // Mert 'csoportoks' a tábla neve
    
    protected $fillable = ['nev'];
   
    public function users()
    {
        return $this->belongsToMany(User::class, 'csoport_user');
    }

    
}
