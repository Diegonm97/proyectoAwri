<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeneficiarioCliente extends Model
{
    protected $table = 'beneficiario_cliente';

     protected $fillable=['nombres', 'apellidos', 'identificacion', 'tipo_id', 'id_cliente'];
}
