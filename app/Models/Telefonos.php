<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefonos extends Model
{
    protected $table = 'telefonos';

    protected $fillable =  [
        'telefono',
        'id_empleado'
    ];
    public $timestamps = false;
}
