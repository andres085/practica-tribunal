<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoObservacion extends Model
{
    use HasFactory;

    protected $table = "documento_observaciones";

    protected $fillable = [
        'observacion'
    ];
}
