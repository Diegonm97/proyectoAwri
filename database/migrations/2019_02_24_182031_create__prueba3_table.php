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

//================================== Ciudad ================================================

        Schema::create('ciudad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nombre');
            $table->integer('codigo');
            $table->timestamps();
        });


//================================ entidad =============================================
        Schema::create('entidad', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('nombre');
            $table->integer('id_ciudad')->unsigned();
            $table->string('telefono');
            $table->string('direccion');
            $table->double('tipo');
            $table->timestamps();

            $table->foreign('id_ciudad')->references('id')->on('ciudad');
        });


//================================ sede =============================================
        Schema::create('sede', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->integer('id_ciudad')->unsigned();
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('id_ciudad')->references('id')->on('ciudad');
        });


//================================ sede_cliente =============================================
        Schema::create('sede_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sede')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();


            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_sede')->references('id')->on('sede');
        });

// =============================== Empresa =================================================

        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit')->unique();
            $table->string('nombre');
            $table->string('nombre_contacto');
            $table->string('telefono_contacto');
            $table->string('email_contacto');
            $table->integer('id_ciudad')->unsigned(); 
            $table->string('direccion');
            $table->integer('estado');
            $table->integer('id_usuario')->unsigned();            
            $table->timestamps();

            
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_ciudad')->references('id')->on('ciudad');

        });

//================================ cliente asociados/indpendientes =========================
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion')->unique();
            $table->integer('tipo_id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->integer('tipo_cliente');
            $table->date('fecha_ingreso');
            $table->date('fecha_nacimiento');
            $table->integer('salario');
            $table->integer('id_ciudad')->unsigned();
            $table->integer('id_eps')->unsigned();
            $table->integer('id_arl')->unsigned();
            $table->integer('id_afp')->unsigned();
            $table->integer('id_cjc')->unsigned();
            $table->integer('estado');
            $table->integer('id_usuario')->unsigned();            
            $table->timestamps();

            
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_ciudad')->references('id')->on('ciudad');
            $table->foreign('id_eps')->references('id')->on('entidad');
            $table->foreign('id_arl')->references('id')->on('entidad');
            $table->foreign('id_afp')->references('id')->on('entidad');
            $table->foreign('id_cjc')->references('id')->on('entidad');
            


        });

//================================ Empleado - empresa ===================================
        Schema::create('empleado_empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empresa')->unsigned();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('tipo_id');
            $table->string('identificacion')->unique();
            $table->string('salario');
            $table->timestamps();


            $table->foreign('id_empresa')->references('id')->on('empresa');
        });

//================================ Beneficiario - empresa  ================================
        Schema::create('beneficiario_empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empleado')->unsigned();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('tipo_id');
            $table->string('identificacion')->unique();
            $table->timestamps();


            $table->foreign('id_empleado')->references('id')->on('empleado_empresa');
        });

//================================ Beneficiario - cliente  ================================
        Schema::create('beneficiario_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('tipo_id');
            $table->string('identificacion')->unique();
            $table->timestamps();


            $table->foreign('id_cliente')->references('id')->on('cliente');
        });
//================================ Empleado ============================================
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('id_sede')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();


            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_sede')->references('id')->on('sede');
        });


//================================ Configuracion ============================================
        Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('codigo');
            $table->integer('valor');
            $table->timestamps();
        });

//================================ facturacion =============================================
        // Schema::create('facturacion', function (Blueprint $table) {
        //     $table->increments('id')->unsigned();
        //     $table->integer('id_cliente')->unsigned();
        //     $table->integer('id_arl')->unsigned();
        //     $table->integer('id_eps')->unsigned();
        //     $table->integer('id_afp')->unsigned();
        //     $table->double('total_beneficiarios')->nullable();
        //     $table->double('total_pago')->nullable();
        //     $table->timestamps();

        //     $table->foreign('id_cliente')->references('id')->on('cli_cliente');
        //     $table->foreign('id_arl')->references('id')->on('entidad');
        //     $table->foreign('id_eps')->references('id')->on('entidad');            
        //     $table->foreign('id_afp')->references('id')->on('entidad');            
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
        Schema::dropIfExists('empresa');
        Schema::dropIfExists('empleado_empresa');
        Schema::dropIfExists('beneficiario_cliente');
        Schema::dropIfExists('beneficiario_empresa');
        Schema::dropIfExists('empleado');
        Schema::dropIfExists('entidad');
        Schema::dropIfExists('sede');
        Schema::dropIfExists('sede_usuario');
        Schema::dropIfExists('ciudad');
    }
}
