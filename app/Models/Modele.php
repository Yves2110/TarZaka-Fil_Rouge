<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    protected $fillable= ['type'];

    public function maison()
    {
        return $this->hasOne(Maisons::class);
    }
}
