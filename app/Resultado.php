<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $fillable = ['id','descripcionResultado','idCategorias','idSubcategoria','idSolicitud'];
    protected $table = 'resultado';
    public $timestamps = false;
}
