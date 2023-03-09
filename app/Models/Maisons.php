<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maisons extends Model
{
    use HasFactory;

    protected $fillable = [
        'modele_id',
        'bailleur_id',
        'localisation',
        'prix',
        'numero_parcelle',
        'photo',
    ];

    public function bailleur()
    {
        return $this->belongsTo(Bailleurs::class);
    }

    public function modele()
    {
        return $this->belongsTo(Modele::class);
    }
    public function locataire()
    {
        return $this->belongsTo(Locataires::class);
    }


}
