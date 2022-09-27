<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = ['id','fecha','idPaciente'];
    protected $table = 'solicitud';
    public $timestamps = false;
}
