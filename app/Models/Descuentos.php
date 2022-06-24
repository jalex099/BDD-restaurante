<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descuentos extends Model
{
    protected $table = 'descuentos';

    protected $fillable =  [
        'descripcion',
        'descuento',
        'esta_activo'
    ];
    public $timestamps = false;
}
