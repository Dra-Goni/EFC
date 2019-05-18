<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'ROL';
    protected $primaryKey = 'ROL_CODIGO';
    public $timestamps = false;

    protected $fillable = [
        'ROL_CODIGO','ROL_NOMBRE'
    ];
}
