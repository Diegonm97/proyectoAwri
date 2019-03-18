@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Informacion Ciudades</h1>
</div>
<div class="col-m-3">
    
    @include('ciudad.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <!-- <h4 class="title">Ciudades
                                    <a href="{{route('ciudad.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4> -->

                                <p class="category">Ciudades</p>
                            {!!Form::open(['route'=>'ciudad.index', 'method'=>'GET','class'=>'navbar-form'])!!}
                                <div class="form group">
                                    {!!Form::number('nombre',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}
                                    
                                    
                                </div>
                            {!!Form::close()!!}
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <div class="container">
                                        <div class="row">
                                    <thead>
                                            <th>Nombre</th>
                                            <th>Código</th>
                                        	<th>Acción</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($ciudad as $ciudad)
                                        <tr>
                                            <th>{{$ciudad->nombre}}</th>
                                            <th>{{$ciudad->codigo}}</th>
                                            <th>
                                                <a href="{{route('ciudad.show', $ciudad->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                
                                            <a href="{{route('ciudad.edit', $ciudad->id)}}"><i class="fas fa-pen"></i></a>
                                                
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                <div align="center">
                                        {!!$ciudad->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>

                    




@endsection