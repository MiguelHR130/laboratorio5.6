<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otrosresultados extends Model
{
    protected $fillable = ['id','idPaciente','fecha','encabezado','cuerpo'];
    protected $table = 'otrosresultados';
    public $timestamps = false;
}
