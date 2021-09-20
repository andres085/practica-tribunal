<?php

namespace App\Models;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentoObservacion extends Model
{
    use HasFactory;

    public function observacion()
    {
        return $this->belongsTo(Documento::class);
    }

    protected $table = "documento_observaciones";

    protected $fillable = [
        'observacion',
        'id_documento'
    ];
}
