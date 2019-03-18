<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoEmpresa extends Model
{
    protected $table = 'empleado_empresa';

     protected $fillable=['nombres', 'apellidos', 'identificacion', 'tipo_id', 'salario', 'id_empresa'];
}
