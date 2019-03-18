<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

     protected $fillable=['nombre', 'nit', 'nombre_contacto', 'telefono_contacto', 'email_contacto', 'estado', 'id_usuario', 'id_ciudad', 'direccion'];


     public function scopeSearch1($query, $nit) // Realiza la busqueda en base de datos de acuerdo al idNIT
	{

   	return $query->where('nit','LIKE',"%$nit%");


    }

 //     public function getClientes() // Realiza la busqueda en base de datos de acuerdo al idNIT
	// {


 //   	return Clientes::where('idEmpresaContraCli','=', $this->idEmpresaContraEmp)->get();


 //    }


    
}
