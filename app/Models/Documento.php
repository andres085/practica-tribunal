<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Organismo;
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

    public function organismo()
    {
        return $this->belongsTo(Organismo::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
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
        self::creating(function ($model) {
            $model->numero = $model->max('numero') + 1;
        });
    }

}
