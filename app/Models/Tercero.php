<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tercero extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'identificacion',
        'tipo_identificacion',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        
    ];

}
