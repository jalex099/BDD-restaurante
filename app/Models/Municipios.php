<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = 'municipios';

    protected $fillable =  [
        'municipio'
    ];
    public $timestamps = false;
}
