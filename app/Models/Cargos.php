<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    protected $table = 'cargos';

    protected $fillable =  [
        'nombres',
        'salario'
    ];
    public $timestamps = false;
}
