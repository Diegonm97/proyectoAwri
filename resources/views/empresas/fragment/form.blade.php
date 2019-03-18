<div class="col-sm-12">
<div class="col-sm-2">
<div class="form-group row has-success">
{!! Form::label('nit','Numero de Nit(*).')!!}
{!!Form::number('nit',null,['class'=>'form-control','title'=>'Ingresa un numero de nit no registrado.','min'=>'5','placeholder'=>'Ej: 66.345.234','id'=>'nuip','required'=>'required'])!!}
</div>
</div>

<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('nombre','Nombre de la empresa(*).')!!}
{!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre de la Empresa.' , 'placeholder'=>'Ej: Intersalud del valle','id'=>'nombre','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('estado','Estado del Empresa(*).')!!}
{!!Form::select('estado', [ 1=>'Activo', 2=>'Retirado'],null,['class'=>'form-control','title'=>'Ingresa un estado del Empente.','title'=>'A,R','id'=>'estado','required'=>'required' ])!!}
</div>
</div>
<!-- <div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('oficinaEmp','Oficina(*).')!!}
{!!Form::select('oficinaEmp', ['Sede Principal'=>'Sede Principal', 'Sede Llanogrande 1'=>'Sede Llanogrande 1', 'Sede Llanogrande 2'=>'Sede Llanogrande 2' , 'Sede Cali'=>'Sede Cali', 'Sede Buga'=>'Sede Buga', 'Sede Rozo'=>'Sede Rozo'],null,['class'=>'form-control','title'=>'Ingresa la oficina donde se afilio al Empente.' ,'id'=>'oficinaEmp','required'=>'required' ])!!}
</div>
</div> -->
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('direccion','Dirección(*).')!!}
{!!Form::text('direccion',null,['class'=>'form-control','title'=>'Ingresar dirección.' , 'placeholder'=>'Ej: Calle 2 # 30 - 20','id'=>'direccion','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('id_ciudad','Ciudad(*).')!!}
{!!Form::text('id_ciudad',null,['class'=>'form-control','title'=>'Ingresa la ciudad de la Empresa.' , 'placeholder'=>'Ej: Palmira','id'=>'id_ciudad','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('nombre_contacto','Nombre contacto(*).')!!}
{!!Form::text('nombre_contacto',null,['class'=>'form-control','title'=>'Ingresar nombre de contacto de la Empresa.' , 'placeholder'=>'Ej: Pepito Perez','id'=>'nombre_contacto','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('email_contacto','Email contacto(*).')!!}
{!!Form::text('email_contacto',null,['class'=>'form-control','title'=>'Ingresar email del contacto de la Empresa.' , 'placeholder'=>'Ej: ejemplo@ejemplo.com ','id'=>'email_contacto','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('telefono_contacto','Telefono contacto(*).')!!}
{!!Form::text('telefono_contacto',null,['class'=>'form-control','title'=>'Ingresar telefono del contacto de la Empresa.' , 'placeholder'=>'Ej: 3201782323 ','id'=>'telefono_contacto','required'=>'required' ])!!}
</div>
</div>

</div>
<br>
<br>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 

<script>

</script>