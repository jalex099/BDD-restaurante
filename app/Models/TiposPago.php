<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposPago extends Model
{
    protected $table = 'tipos_pago';

    protected $fillable =  [
        'nombre'
    ];
}
