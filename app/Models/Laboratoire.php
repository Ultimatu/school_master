<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'numero',
        'professeur_id',
    ];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }


}
