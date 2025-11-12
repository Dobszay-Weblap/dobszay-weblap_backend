<?php

namespace App\Models;
use App\Models\Csoportok;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    public function isAdmin()  {
        return $this->jogosultsagi_szint === 'admin';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'jogosultsagi_szint',
        'password_changed',  // ← Új mező hozzáadása
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'password_changed' => 'boolean',  // ← Boolean castolás
    ];


public function csoportok()
{
    return $this->belongsToMany(Csoportok::class, 'csoport_user', 'user_id', 'csoport_id');
}



}
