<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Organismo;
use App\Models\Expediente;
use App\Models\DocumentoObservacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documento extends Model
{
    use HasFactory;

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }

    public function organismo()
    {
        return $this->belongsTo(Organismo::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function observaciones()
    {
        return $this->hasMany(DocumentoObservacion::class, 'id_documento');
    }

     protected $fillable = [
        'numero',
        'id_expediente',
        'id_tipo',
        'id_organismo',
        'id_area',
        'anio',
        'tema',
        'informacion',
        'caratula'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function (Documento $documento) {

            $count = Documento::where('anio', '=', $documento->anio)->get()->count();

            if($count == 0){
                $documento->numero = 1;
            } else {
                $documento->where('anio', '=', $documento->anio)->orderBy('numero', 'desc')->first();
                $documento->increment('numero');
            }
        });
    }

}
