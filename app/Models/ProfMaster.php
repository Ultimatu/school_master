<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfMaster extends Model
{
    use HasFactory;

    protected $table = "masters";


    protected $fillable = [
        'nom',
    ];


    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }


    public function masterCours()
    {
        return $this->hasMany(MasterCours::class);
    }


    //au chargement on recupere pour l'uilisateur connecté

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('id', function (Builder $builder) {
            $builder->where('id', auth()->user()->master_id);
        });
    }
}
