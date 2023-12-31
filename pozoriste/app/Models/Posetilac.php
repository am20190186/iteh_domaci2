<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posetilac extends Model
{
    use HasFactory;

    protected $table = 'posetioci';

    protected $fillable = [
        'imePrezime',
        'godine',
        'kontakt',
    ];

    public function karte()
    {
        return $this->hasMany(Karta::class);
    }
}
