@extends('layouts.apphome')
@section('content')


<p>
    
    <h1 align="center">Crear Clientes</h1>
</p>

<p>				
 	{!! Form::open(['route' => 'clientes.store']) !!}

        @include('clientes.fragment.form')

    {!! Form::close() !!}
</p>


                    




@endsection