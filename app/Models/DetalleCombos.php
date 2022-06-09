<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCombos extends Model
{
    protected $table = 'detalle_combos';

    protected $fillable =  [
        'id_combo',
        'id_producto'
    ];
}
