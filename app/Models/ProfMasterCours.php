<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfMasterCours extends Model
{
    use HasFactory;

    protected $table = 'master_cours';
    protected $fillable = [
        'master_id',
        'cours_id',
        'is_optional',
    ];


    public function cours(){
        return $this->belongsTo(Cours::class);
    }


    public function master(){
        return $this->belongsTo(Master::class);
    }


    //au chargement on recupere pour l'uilisateur connecté

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('master_id', function (Builder $builder) {
            $builder->where('master_id', auth()->user()->master_id);

        });
    }
}
