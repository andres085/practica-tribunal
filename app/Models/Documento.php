<?php

namespace App\Models;

use App\Models\Expediente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documento extends Model
{
    use HasFactory;

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }

     protected $fillable = [
        'id_expediente',
        'id_tipo',
        'id_organismo',
        'anio',
        'tema',
        'informacion',
        'caratula'
    ];
}
