<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'RESPUESTA';
    protected $primaryKey = 'RES_CODIGO';
    public $timestamps = false;

    protected $fillable = [
        'RES_CODIGO','RES_RESPUESTA','RES_INASISTENCIA'
    ];
}
