<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entiad';

     protected $fillable=['nombre', 'id_ciudad', 'telefono', 'direccion', 'tipo'];
}
