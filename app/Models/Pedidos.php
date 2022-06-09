<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';

    protected $fillable =  [
        'fecha',
        'hora',
        'cliente',
        'hora_entrega_estimada',
        'esta_entregado',
        'hora_entrega_efectiva',
        'id_mesa',
        'id_empleado',
        'esta_pagado'
    ];
}
