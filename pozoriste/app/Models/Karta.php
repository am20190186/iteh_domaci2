<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karta extends Model
{
    use HasFactory;

    protected $table = 'karte';

    protected $fillable = [
        'iznos',
        'brojSedista',
        'nacinPlacanja',
        'posetilac_id',
        'predstava_id',
    ];

    public function predstave()
    {
        return $this->belongsTo(Predstava::class);
    }

    public function posetioci()
    {
        return $this->belongsTo(Posetilac::class);
    }
}
