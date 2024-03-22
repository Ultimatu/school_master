<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Professeur extends Authenticatable implements FilamentUser
{
    use HasApiTokens,  HasFactory,  Notifiable;


    protected $fillable = [
        'numen', 
        'name',
        'email',
        'password',
        'email_verified_at',
        'master_id',
        'specialisation',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function master()
    {
        return $this->belongsTo(Master::class);
    }


    public function laboratoire()
    {
        return $this->hasOne(Laboratoire::class);
    }


    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return true;
    }
}
