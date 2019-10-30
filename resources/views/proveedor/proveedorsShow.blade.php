@extends('layouts.app')

@section('content')
<h1 class="text-center">Mostrando Proveedor {{ $proveedor->id }}</h1>
    <div class="jumbotron text-center">    
        <p>
            <strong>Nombre:</strong> {{ $proveedor->nombre }}<br>
            <ul>
            @foreach($proveedor->piezas as $pieza)
            <li>$pieza->nombre</li>
            @endforeach
        </ul>
        </p>
    </div>
    <div class="row w-100 align-items-center">
    	<div class="col text-center">
            <a href="{{route('proveedors.index')}}" class="btn btn-success center-block">Regresar a Index</a>
    	</div>	
    </div>
        

    
@endsection