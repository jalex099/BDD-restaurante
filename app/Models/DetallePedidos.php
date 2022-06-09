<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedidos extends Model
{
    protected $table = 'detalle_pedidos';

    protected $fillable =  [
        'fecha',
        'hora',
        'cliente',
        'id_combo',
        'precio_unitario',
        'cantidad',
        'importe_bruto',
        'id_descuento',
        'total_descuento',
        'importe_neto'
    ];
}
