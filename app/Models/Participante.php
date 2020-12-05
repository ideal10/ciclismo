<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;


    protected $fillable = [
        'numero_asignado',
        'inscripcion_paga',
        'llegada',
        'tiempo',
        'puesto',
        'edad'
    ];

    protected $hidden = [
        'id_categoria',
        'id_tercero',
    ];

}
