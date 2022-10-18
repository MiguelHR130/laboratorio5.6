<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrosolicitud extends Model
{
    protected $fillable = ['id','idSolicitud','idCategoria','observaciones'];
    protected $table = 'registrosolicitud';
    public $timestamps = false;

}
