<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combos extends Model
{
    protected $table = 'combos';

    protected $fillable =  [
        'nombre',
        'precio'
    ];
}
