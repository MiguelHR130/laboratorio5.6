<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable = ['id','nombreSubcategoria','vminH','vmaxH','unidadMedida','idCategorias'];
    protected $table = 'subcategoria';
    public $timestamps = false;
}
