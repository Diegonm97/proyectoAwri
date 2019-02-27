<div class="col-sm-12">
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('tipoIdCli','Tipo ID(*).')!!}
{!!Form::select('tipoIdCli', ['Cc'=>'Cc', 'Pasaporte'=>'Pasaporte', 'Permiso de Trabajo'=>'Permiso de Trabajo'],null,['class'=>'form-control','title'=>'Ingresa el tipo de id del cliente.','id'=>'tipoIdCli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('nuip','Numero de cedula(*).')!!}
{!!Form::number('nuip',null,['class'=>'form-control','title'=>'Ingresa un numero de identificacion, no registrado.','min'=>'5','placeholder'=>'Ej: 66.345.234','id'=>'nuip','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('nombreCli','Nombre(s) del cliente(*).')!!}
{!!Form::text('nombreCli',null,['class'=>'form-control','title'=>'Ingresa el nombre del cliente.' , 'placeholder'=>'Ej: Juan Rodrigo','id'=>'nombreCli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('apellidoCli','Apellido(s) del cliente(*).')!!}
{!!Form::text('apellidoCli',null,['class'=>'form-control','title'=>'Ingresa el apellido del cliente.' , 'placeholder'=>'Ej: Perez Lopez','id'=>'apellidoCli','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('estadoCli','Estado del cliente(*).')!!}
{!!Form::select('estadoCli', ['Activo'=>'Activo', 'Retirado'=>'Retirado'],null,['class'=>'form-control','title'=>'Ingresa un estado del cliente.','title'=>'A,R','id'=>'estadoCli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('direccionCli','Direccion(*).')!!}
{!!Form::text('direccionCli',null,['class'=>'form-control','title'=>'Ingresa la direccion del cliente.', 'placeholder'=>'Ej: Cra 10a #34-14','id'=>'direccionCli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('oficinaCli','Oficina(*).')!!}
{!!Form::select('oficinaCli', ['Sede Principal'=>'Sede Principal', 'Sede Llanogrande 1'=>'Sede Llanogrande 1', 'Sede Llanogrande 2'=>'Sede Llanogrande 2' , 'Sede Cali'=>'Sede Cali', 'Sede Buga'=>'Sede Buga', 'Sede Rozo'=>'Sede Rozo'],null,['class'=>'form-control','title'=>'Ingresa la oficina donde se afilio al cliente.' ,'id'=>'oficinaCli','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('ciudadCli','Ciudad(*).')!!}
{!!Form::text('ciudadCli',null,['class'=>'form-control','title'=>'Ingresa la ciudad del cliente.' , 'placeholder'=>'Ej: Palmira','id'=>'ciudadCli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('telefonoCli','Telefono(*).')!!}
{!!Form::number('telefonoCli',null,['class'=>'form-control','title'=>'Ingresa el telefono del cliente.' , 'placeholder'=>'Ej: 3209523123','id'=>'telefonoCli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('emailCli','Correo Electronico.')!!}
{!!Form::text('emailCli',null,['class'=>'form-control','title'=>'Ingresa el correo electronico del cliente.' , 'placeholder'=>'Ej: ejemplo@ejemplo.com ','id'=>'emailCli','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('fechaNacCli','Fecha de nacimiento(*).')!!}
{!!Form::date('fechaNacCli',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">


{!! Form::label('salarioCli','Salario(*).')!!}
{!!Form::number('salarioCli',null,['class'=>'form-control','title'=>'Ingresa el salario del cliente.' , 'placeholder'=>'Ej: 680000','id'=>'salarioCli','required'=>'required', 'onkeyup'=>'calcular()' ])!!}



</div>
</div>





<div class="col-sm-4">
<div class="form-group row has-success">
<label for="rangoCli">Rango(*).</label>
<select onchange="calcular()" class="form-control" title="Ingresa el rango del cliente." id="rangoCli" required="required" name="rangoCli">
	@for ($i = 1; $i <= 5; $i++)
	<option value="{{$i}}">{{$i}}</option>

@endfor
</select>

</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('EPScli','Eps cliente(*).')!!}
{!!Form::number('EPScli',null,['class'=>'form-control','title'=>'Ingresa el valor de la EPS  del cliente.' , 'placeholder'=>'Ej: 13000','id'=>'EPScli','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('ARLcli','ARL del cliente.')!!}
{!!Form::number('ARLcli',null,['class'=>'form-control','title'=>'Ingresa el valor de la ARL del cliente.' , 'placeholder'=>'Ej: 15000','id'=>'ARLcli'])!!}
</div>
</div>


<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('AFPcli','AFP del cliente.')!!}
{!!Form::number('AFPcli',null,['class'=>'form-control','title'=>'Ingresa el valor de la AFP del cliente.' , 'placeholder'=>'Ej: 14000','id'=>'AFPcli'])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('cajaCompCli','Caja de Compensacion.')!!}
{!!Form::text('cajaCompCli',null,['class'=>'form-control','title'=>'Ingresa el valor la caja de compensacion del cliente.' , 'placeholder'=>'Ej: 12000','id'=>'cajaCompCli'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('beneficioCli','Beneficio.')!!}
{!!Form::select('beneficioCli', ['No'=>'No', 'Si' => 'Si'],null,['class'=>'form-control','title'=>'Ingresa un estado del cliente.' ,'id'=>'beneficioCli'])!!}
</div>
</div>


<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('fechaIngCli','Fecha de Ingreso(*).')!!}
{!!Form::date('fechaIngCli',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
</div>
</div>
</div>
<div class="col-sm-12">
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
</div>
<div class="col-sm-12">
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
<br>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 

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
</script>