<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

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

}
