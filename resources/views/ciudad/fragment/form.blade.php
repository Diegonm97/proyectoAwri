<div class="col-sm-12">
<div class="col-sm-2">
<div class="form-group row has-success">
{!! Form::label('tipo_id','Tipo ID(*).')!!}
{!!Form::select('tipoIdCli', ['1'=>'CC', '2'=>'Pasaporte', '3'=>'Permiso de Trabajo'],null,['class'=>'form-control','title'=>'Ingresa el tipo de id del cliente.','id'=>'tipo_id','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-2">
<div class="form-group row has-success">
{!! Form::label('identificacion','Numero de cedula(*).')!!}
{!!Form::number('identificacion',null,['class'=>'form-control','title'=>'Ingresa un numero de identificacion, no registrado.','min'=>'5','placeholder'=>'Ej: 66.345.234','id'=>'identificacion','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('nombre','Nombre(s) del cliente(*).')!!}
{!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre del cliente.' , 'placeholder'=>'Ej: Juan Rodrigo','id'=>'nombre','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('apellido','Apellido(s) del cliente(*).')!!}
{!!Form::text('apellido',null,['class'=>'form-control','title'=>'Ingresa el apellido del cliente.' , 'placeholder'=>'Ej: Perez Lopez','id'=>'apellido','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-2">
<div class="form-group row has-success">
{!! Form::label('fecha_nacimiento','Fecha de Nacimiento(*).')!!}
{!!Form::date('fecha_nacimiento',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('telefono','Telefono(*).')!!}
{!!Form::number('telefono',null,['class'=>'form-control','title'=>'Ingresa el telefono del cliente.' , 'placeholder'=>'Ej: 3209523123','id'=>'telefono','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('email','Correo Electronico.')!!}
{!!Form::text('email',null,['class'=>'form-control','title'=>'Ingresa el correo electronico del cliente.' , 'placeholder'=>'Ej: ejemplo@ejemplo.com ','id'=>'email','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('direccion','Direccion(*).')!!}
{!!Form::text('direccion',null,['class'=>'form-control','title'=>'Ingresa la direccion del cliente.', 'placeholder'=>'Ej: Cra 10a #34-14','id'=>'direccion','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('ciudad','Ciudad(*).')!!}
{!!Form::text('ciudad',null,['class'=>'form-control','title'=>'Ingresa la ciudad del cliente.' , 'placeholder'=>'Ej: Palmira','id'=>'ciudad','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('estado','Estado del cliente(*).')!!}
{!!Form::select('estado', ['1'=>'Activo', '2'=>'Retirado'],null,['class'=>'form-control','title'=>'Ingresa un estado del cliente.','title'=>'A,R','id'=>'estado','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('salario','Salario(*).')!!}
{!!Form::number('salario',null,['class'=>'form-control','title'=>'Ingresa el salario del cliente.' , 'placeholder'=>'Ej: 680000','id'=>'salario','required'=>'required', 'onkeyup'=>'calcular()' ])!!}
</div>
</div>





<!-- <div class="col-sm-4">
<div class="form-group row has-success">
<label for="rangoCli">Rango(*).</label>
<select onchange="calcular()" class="form-control" title="Ingresa el rango del cliente." id="rangoCli" required="required" name="rangoCli">
	@for ($i = 1; $i <= 5; $i++)
	<option value="{{$i}}">{{$i}}</option>

@endfor
</select>

</div>
</div> -->
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('id_eps','Eps cliente(*).')!!}
{!!Form::number('id_eps',null,['class'=>'form-control','title'=>'Ingresar EPS.' , 'placeholder'=>'-- Seleccionar --','id'=>'id_eps','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('id_arl','ARL del cliente.')!!}
{!!Form::number('id_arl',null,['class'=>'form-control','title'=>'Ingresa ARL.' , 'placeholder'=>'-- Seleccionar --','id'=>'id_arl'])!!}
</div>
</div>


<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('id_afp','AFP del cliente.')!!}
{!!Form::number('id_afp',null,['class'=>'form-control','title'=>'Ingresa AFP.' , 'placeholder'=>'Ej: 14000','id'=>'id_afp'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('id_cjc','Caja de Compensacion.')!!}
{!!Form::text('d_cjc',null,['class'=>'form-control','title'=>'Ingresa el valor la caja de compensacion del cliente.' , 'placeholder'=>'Ej: 12000','id'=>'d_cjc'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('fecha_ingreso','Fecha de Ingreso(*).')!!}
{!!Form::date('fecha_ingreso',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
</div>
</div>
</div>
<!-- <div class="col-sm-12">
<div class="col-sm-2">
<div class="form-group row has-success">
{!! Form::label('tipoCli','Tipo de cliente(*).')!!}
{!!Form::select('tipoCli', ['Independiente' => 'Independiente', 'Asociado'=>'Asociado', 'Empresa'=>'Empresa'], null,['class'=>'form-control','title'=>'Elige tu tipoCli.', 'required'=>'required','name'=>'tipoCli'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('idEmpresaContraCli','Id de la empresa(*).')!!}
{!!Form::text('idEmpresaContraCli',null,['class'=>'form-control','title'=>'Ingresa el id de la empresa del cliente.' , 'placeholder'=>'Ej: 12345678','id'=>'idEmpresaContraCli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-1">
<div class="form-group row has-success">
{!! Form::label('idNIT','Id del Nit(*).')!!}
{!!Form::text('idNIT',null,['class'=>'form-control','title'=>'Ingresa el id del Nit.' , 'placeholder'=>'Ej: 1','id'=>'idNIT'])!!}
</div>
</div>

<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('nombreEmpCli','Nombre de la Empresa(*).')!!}
{!!Form::text('nombreEmpCli',null,['class'=>'form-control','title'=>'Ingresa el nombre de la empresa.' , 'placeholder'=>'Ej: La brasa roja','id'=>'nombreEmpCli','required'=>'required' ])!!}
</div>
</div>
</div> -->
<!-- <div class="col-sm-12">
<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('UPCadicCli','UPC del cliente.')!!}
{!!Form::text('UPCadicCli',null,['class'=>'form-control','title'=>'Ingresa el UPC del cliente.' , 'placeholder'=>'Ej: 1','id'=>'UPCadicCli' ])!!}
</div>
</div>
<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('estadoPago','Estado de pago(*).')!!}
{!!Form::select('estadoPago', ['Pago'=>'Pago', 'No Pago'=>'No Pago'],null,['class'=>'form-control','title'=>'Ingresa un estado de pago del cliente.', 'id'=>'estadoPago','required'=>'required' ])!!}
</div>
</div>
</div>
<br>
<br> -->
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 
<!-- 
<script>
function calcular(){
	var porcentaje = "{{$porcentaje}}";
	var array = [10, 20, 30, 40, 50];
	var rango = $("#rangoCli").val();
	var salario = $("#salarioCli").val();
	salario = (salario == "") ? 0 : salario;
	eps(salario,porcentaje);
	arl(salario,array[rango-1]);
	//console.log(salario);
}


function arl(salario,porcentaje){
	$("#ARLcli").val(salario*(porcentaje/100));
}
function eps(salario,porcentaje){
	$("#EPScli").val(salario*(porcentaje/100));
}
</script> -->