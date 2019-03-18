<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeneficiarioEmpresa extends Model
{
    protected $table = 'beneficiario_empresa';

     protected $fillable=['nombres', 'apellidos', 'identificacion', 'tipo_id', 'id_empleado'];
}
