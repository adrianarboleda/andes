@extends('layouts.layout')

@section('content')
<div clas="container">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class= "cand">
                <div class="cand-header">
                    <div class="cand-body">
                        <table class = "table">
                            <thead>
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Area</th>
                            <th>Formacion Academica</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Fecha de Contratacion</th>
                            <th>Accion</th>
                            </tr>                            
                            </thead>
                            <tbody>
                            @foreach($empleados as $empleado)
                                <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>{{ $empleado->nombre }}</td>
                                <td>{{ $empleado->correo }}</td>
                                <td>{{ $empleado->area }}</td>
                                <td>{{ $empleado->formacionAcademica }}</td>
                                <td>{{ $empleado->fechaDeNacimiento->format('d/m/Y') }}</td>
                                <td>{{ $empleado->fechaDeContratacion->format('d/m/Y') }}</td>
                                <td><a href="{{route('empleados.show', $empleado->id)}}" class="btn btn-info">Mostrar</a></td>;
                                <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('empleados.edit', $empleado->id) }}">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>&nbsp;
                                    <form action="{{url('empleados', [$empleado->id])}}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                    </form>
                                </div>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection