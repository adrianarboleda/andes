@if(isset($proveedor))
  <!--form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
  <input type="hidden" name="_method" value="PATCH"-->
  {!! Form::model($proveedor, ['route' => ['proveedors.update', $proveedor->id], 'method' => 'PATCH']) !!}
@else
  <!--form action="{{ route('proyectos.store') }}" method="POST"-->
  {!! Form::open(['route' => 'proveedors.store']) !!}
@endif
  @csrf
  <div class="form-group">
    <!--label for="nombre">Nombre completo</label-->
    {!! Form::label ('nombre', 'Nombre completo') !!}
    <!--input name="nombre" value="{{$empleado->nombre ?? ''}}" class="form-control" id="nombre"-->
    {!! Form::text ('nombre', null, ['class' => 'form-control']) !!}
  </div>   
  <div class="form-group">
    <!--<label for="fechaDeContratacion">Fecha De Contratacion</label>-->
    {!! Form::label ('piezas_id[]', 'Piezas')!!}
    <!--<input type="date" name="fechaDeContratacion" value="{{isset($empleado) ? $empleado->fechaDeContratacion->toDateString() : ''}}"class="form-control" id="fechaDeContratacion" placeholder="yyyy/mm/dd">-->
    {!! Form::select('piezas_id[]',$piezas, $seleccionados ?? null, ['class' => 'form-control', 'multiple']) !!}
  </div>
  <div class="form-group">
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
{!! Form::close() !!}