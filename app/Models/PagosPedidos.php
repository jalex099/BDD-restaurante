<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagosPedidos extends Model
{
    protected $table = 'pagos_pedidos';

    protected $fillable =  [
        'fecha',
        'hora',
        'cliente',
        'id_tipo_pago',
        'hora_pago',
        'id_empleado',
        'hora_pago',
        'id_empleado',
        'subtotal',
        'sum_descuentos',
        'iva',
        'total'
    ];
    
    public $timestamps = false;
}
