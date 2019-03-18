<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'cliente';

    protected $fillable=['nombres', 'apellidos', 'identificacion', 'tipo_id', 'salario','id_ciudad', 'direccion', 'email', 'telefono', 'estado', 'id_usuario', 'id_eps', 'id_arl', 'id_cjc', 'id_afp', 'tipo_cliente', 'fecha_ingreso', 'fecha_nacimiento'];

     // protected $fillable=['nuip','nombreCli','apellidoCli','estadoCli','tipoIdCli','direccionCli','oficinaCli','ciudadCli','telefonoCli','emailCli','fechaNacCli','salarioCli','rangoCli','EPScli','ARLcli','AFPcli','cajaCompCli','beneficioCli','fechaIngCli','tipoCli','idEmpresaContraCli','idNIT','nombreEmpcli','UPCadicCli','estadoPago'];

// Realiza la busqueda en base de datos de acuerdo al nuip
	public function scopeSearch1($query, $identificacion) 
	{
   	return $query->where('identificacion','LIKE',"%$identificacion%");
    }

}
