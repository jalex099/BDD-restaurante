<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    protected $table = 'direcciones';

    protected $fillable =  [
        'detalle',
        'id_empleado',
        'id_departamento',
        'id_municipio'
    ];
}
