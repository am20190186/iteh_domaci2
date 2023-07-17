<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predstava extends Model
{
    use HasFactory;

    public function karte()
    {
        return $this->hasMany(Karta::class);
    }


}
