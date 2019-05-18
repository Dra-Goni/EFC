<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'ALUMNOS';
    protected $primaryKey = 'ALU_RUT';
    public $timestamps = false;

    protected $fillable = [
        'ALU_RUT','ALU_CELULAR','ALU_MAIL'
    ];
}
