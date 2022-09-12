<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiements extends Model
{
    use HasFactory;

    protected $fillable = [
        'mois_id',
        'locataire_id',
        'prix',
        'nombre',

    ];

    public function paiement(){
        return $this->belongsTo(Locataires::class, 'locataire_id');
    }

    public function mois(){
        return $this->belongsTo(Mois::class, 'mois_id');
    }
}
