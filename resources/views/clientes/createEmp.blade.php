@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
	<a href="{{route('empresa.index')}}"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8" >
	<h1 align="center">Crear Clientes de una Empresa</h1>
</div>
<div class="col-sm-3">
	
	@include('empresas.fragment.info')
	@include('clientes.fragment.error')


	<h4><strong>(*) : Campo obligatorio</strong></h4>

</div>

<div class="col-sm-12">

 	{!! Form::open(array('route' => array('storeEmp', $empresa->id) )) !!}

        @include('clientes.fragment.formEmp')

    {!! Form::close() !!}


</div>
                    




@endsection