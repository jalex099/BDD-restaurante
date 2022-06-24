<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{
    protected $table = 'mesas';

    protected $fillable =  [
        'id_tipo_mesa',
        'disponibilidad'
    ];
    public $timestamps = false;
}
