<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SedeUsuario extends Model
{
    protected $table = 'sede_usuario';

     protected $fillable=['id_sede', 'id_usuario'];
}
