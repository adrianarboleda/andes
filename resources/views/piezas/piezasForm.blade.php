@if(isset($pieza))
  <!--form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
  <input type="hidden" name="_method" value="PATCH"-->
  {!! Form::model($pieza, ['route' => ['piezas.update', $pieza->id], 'method' => 'PATCH']) !!}
@else
  <!--form action="{{ route('proyectos.store') }}" method="POST"-->
  {!! Form::open(['route' => 'piezas.store']) !!}
@endif
  @csrf
  <div class="form-group">
    <!--label for="nombre">Nombre completo</label-->
    {!! Form::label ('nombre', 'Nombre de pieza') !!}
    <!--input name="nombre" value="{{$empleado->nombre ?? ''}}" class="form-control" id="nombre"-->
    {!! Form::text ('nombre', null, ['class' => 'form-control']) !!}
  </div>   
  
  <div class="form-group">
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
{!! Form::close() !!}