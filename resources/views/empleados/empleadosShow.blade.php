@extends('layouts.app')

@section('content')
<h1 class="text-center">Mostrando usuario {{ $empleado->id }}</h1>
    <div class="jumbotron text-center">    
        <p>
            <strong>Nombre:</strong> {{ $empleado->nombre }}<br>
            <strong>E-mail:</strong> {{ $empleado->correo }}<br>
            <strong>Area de trabajo:</strong> {{ $empleado->area }}<br>
            <strong>Formacion Academica:</strong> {{ $empleado->formacionAcademica }}<br>
            <strong>Fecha de nacimiento:</strong> {{ $empleado->fechaDeNacimiento }}<br>
            <strong>Fecha de contratacion:</strong> {{ $empleado->fechaDeContratacion }}
        </p>
    </div>
    <div class="row w-100 align-items-center">
    	<div class="col text-center">
            <a href="{{route('empleados.index')}}" class="btn btn-success center-block">Regresar a Index</a>
    	</div>	
    </div>
        

    
@endsection