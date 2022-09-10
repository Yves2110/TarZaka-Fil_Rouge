<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bailleurs extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'adresse',
        'photo',
        'numero',
    ];

    public function maisons()
    {
        return $this->hasMany(Maisons::class);
    }
}
