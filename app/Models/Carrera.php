<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_carrera',
        'titulo',
        'subtitulo',
        'lugar_inicio',
        'lugar_fin',
        'kilometros',
        'valor_inscripcion'
    ];

    protected $hidden = [
        'id_grupo'
    ];
}
