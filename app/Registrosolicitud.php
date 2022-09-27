<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrosolicitud extends Model
{
    protected $fillable = ['id','idSolicitud','idCategoria'];
    protected $table = 'registrosolicitud';
    public $timestamps = false;

}
