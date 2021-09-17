<?php

namespace App\Models;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expediente extends Model
{
    use HasFactory;

    public function documentos()
    {
        return $this->hasMany(Documento::class, 'id_expediente');
    }

    protected $fillable = [
        'numero'
    ];
}
