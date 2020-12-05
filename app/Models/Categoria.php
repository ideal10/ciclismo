<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'limite_inferior',
        'limite_superior',
    ];

    protected $hidden = [
        'id_carrera',
        'salida',
    ];
}
