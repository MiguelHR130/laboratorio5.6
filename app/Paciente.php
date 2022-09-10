<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['id','nombre','apPaterno','apMaterno','edad'];
    protected $table = 'paciente';
    public $timestamps = false;
}
