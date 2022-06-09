<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';

    protected $fillable =  [
        'nombres',
        'apellidos',
        'dui',
        'pasaporte',
        'sexo',
        'nup',
        'isss',
        'id_cargo'
    ];
}
