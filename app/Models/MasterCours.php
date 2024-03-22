<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCours extends Model
{
    use HasFactory;


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
}
