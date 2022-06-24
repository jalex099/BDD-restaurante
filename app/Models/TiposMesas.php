<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposMesas extends Model
{
    protected $table = 'tipos_mesas';

    protected $fillable =  [
        'nombre',
        'capacidad'
    ];
    public $timestamps = false;
}
