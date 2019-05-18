<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inasistencia extends Model
{
    protected $table = 'INASISTENCIA';
    protected $primaryKey = 'INA_CODIGO';
    public $timestamps = false;

    protected $fillable = [
        'INA_CODIGO','INA_ASIGNATURA','INA_FECHA','INA_ALUMNO','INA_USUARIO','INA_SECCION','INA_ESTADO'
    ];
}
