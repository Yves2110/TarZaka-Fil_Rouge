<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataires extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'cnib',
        'maison_id',
        'photo',
        'numero',
        'email',
    ];
    public function house()
    {
        return $this->belongsTo(Maisons::class, 'maison_id');
    }
}
