<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';

     protected $fillable=['nombres', 'apellidos', 'id_sede', 'id_usuario'];
}
