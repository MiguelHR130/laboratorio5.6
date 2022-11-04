<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['id','nombre','apPaterno','apMaterno','sexo','fecnac'];
    protected $table = 'paciente';
    public $timestamps = false;
}
