@extends('layouts.app')

@section('content')
<h1 class="text-center">Mostrando usuario {{ $proyecto->id }}</h1>
    <div class="jumbotron text-center">    
        <p>
            <strong>Nombre:</strong> {{ $proyecto->nombre }}<br>
            <strong>Fecha de entrega:</strong> {{ $proyecto->fechaFinal }}
        </p>
    </div>
    <div class="row w-100 align-items-center">
    	<div class="col text-center">
            <a href="{{route('proyectos.index')}}" class="btn btn-success center-block">Regresar a Index</a>
    	</div>	
    </div>
        

    
@endsection