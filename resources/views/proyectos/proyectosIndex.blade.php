@extends('layouts.layout')

@section('content')
<h1>Proyectos</h1>
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
                            <th>Fecha Final</th>                            
                            </tr>                            
                            </thead>
                            <tbody>
                            @foreach($proyectos as $proyecto)
                                <tr>
                                <td>{{ $proyecto->id }}</td>
                                <td>{{ $proyecto->nombre }}</td>
                                <td>{{ $proyecto->fechaFinal->format('d/m/Y') }}</td>                                
                                <td><a href="{{route('proyectos.show', $proyecto->id)}}" class="btn btn-info">Mostrar</a>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('proyectos.edit', $proyecto->id) }}">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>&nbsp;
                                    <form action="{{url('proyectos', [$proyecto->id])}}" method="POST">
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