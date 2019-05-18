<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inasistencia extends Model
{
    protected $table = 'INASISTENCIA';
    protected $primaryKey = 'ALU_RUT';
    public $timestamps = false;

    protected $fillable = [
        'INA_CODIGO','INA_ASIGNATURA','INA_FECHA','INA_ALUMNO','INA_USUARIO'
    ];
}
