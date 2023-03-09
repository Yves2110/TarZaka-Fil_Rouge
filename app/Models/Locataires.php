<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataires extends Model
{
    use HasFactory;
    protected $fillable = [
        'maison_id',
        'firstname',
        'lastname',
        'cnib',
        'email',
        'photo',
        'numero',
    ];
    public function house()
    {
        return $this->belongsTo(Maisons::class, 'maison_id');
    }
}
