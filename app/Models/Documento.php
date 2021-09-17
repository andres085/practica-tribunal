<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

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
