<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maisons extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix',
        'modele',
        'numero_parcelle',
        'bailleur_firstname',
        'photo',
        'localisation',
    ];
}
