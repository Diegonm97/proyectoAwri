<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrueba3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//================================ cli_cliente =============================================
        Schema::create('cli_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nitonuip')->unique();
            $table->string('nombre');
            $table->string('nombre_contacto');
            $table->string('telefono_contacto');
            $table->string('email_contacto');
            $table->string('estado');
            $table->integer('id_usuario')->unsigned();            
            $table->timestamps();

            
            $table->foreign('id_usuario')->references('id')->on('users');


        });

//================================ cli_usuario =============================================
        Schema::create('cli_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('documento')->unique();
            $table->timestamps();


            $table->foreign('id_cliente')->references('id')->on('cli_cliente');
        });
//================================ empleado =============================================
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('documento')->unique();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->double('estado');
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();


            $table->foreign('id_usuario')->references('id')->on('users');
        });

//================================ entidad =============================================
        Schema::create('entidad', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('nombre');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('direccion');
            $table->double('tipo');
            $table->timestamps();
        });
//================================ facturacion =============================================
        Schema::create('facturacion', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_arl')->unsigned();
            $table->integer('id_eps')->unsigned();
            $table->integer('id_afp')->unsigned();
            $table->double('total_beneficiarios')->nullable();
            $table->double('total_pago')->nullable();
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('cli_cliente');
            $table->foreign('id_arl')->references('id')->on('entidad');
            $table->foreign('id_eps')->references('id')->on('entidad');            
            $table->foreign('id_afp')->references('id')->on('entidad');            
        });


//================================ sede_empresa =============================================
        Schema::create('sede_empresa', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();
        });


//================================ sede_cliente =============================================
        Schema::create('sede_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sede')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->timestamps();


            $table->foreign('id_cliente')->references('id')->on('cli_cliente');
            $table->foreign('id_sede')->references('id')->on('sede_empresa');
        });







    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cli_cliente');
        Schema::dropIfExists('cli_usuario');
        Schema::dropIfExists('empleado');
        Schema::dropIfExists('entidad');
        Schema::dropIfExists('facturacion');
        Schema::dropIfExists('sede_cliente');
        Schema::dropIfExists('sede_empresa');
    }
}
