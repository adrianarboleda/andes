@if(isset($empleado))
  <!--form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
  <input type="hidden" name="_method" value="PATCH"-->
  {!! Form::model($empleado, ['route' => ['empleados.update', $empleado->id, $proyecto], 'method' => 'PATCH']) !!}
@else
  <!--form action="{{ route('empleados.store') }}" method="POST"-->
  {!! Form::open(['route' => 'empleados.store']) !!}
@endif
  @csrf
  <div class="form-group">
    <!--label for="nombre">Nombre completo</label-->
    {!! Form::label ('nombre', 'Nombre completo') !!}
    <!--input name="nombre" value="{{$empleado->nombre ?? ''}}" class="form-control" id="nombre"-->
    {!! Form::text ('nombre', null, ['class' => 'form-control']) !!}
  </div>   
  <div class="form-group">
    <!--label for="correo">Email address</label-->
    {!! Form::label ('correo', 'Corro Electronico')!!}
    <!--input name="correo" value="{{$empleado->correo ?? ''}}" type="email" class="form-control" id="correo" placeholder="name@example.com"-->
    {!! Form::email('correo', null, ['class' => 'form-group'])!!}
  </div>
  <div class="form-group">
    <!--label for="area">Area de trabajo</label-->
    {!! Form::label ('area', 'Area de trabajo')!!}
    <!--input name = "area" value="{{$empleado->area ?? ''}}" class="form-control" list="area">
        <datalist id="area">
            <option label="Mantenimiento" value="Mantenimiento">
            <option label="Planeacion" value="Planeacion">
            <option label="Desarrollo" value="Desarollo">
            <option label="Recursos Humanos" value="Recursos Humanos">
            <option label="Contabilidad" value="Contabilidad">
        </datalist-->
      {!! Form::select ('area', [
            'Mantenimiento' => 'Mantenimiento',
            'Planeacion' => 'Planeacion',
            'Desarrollo' => 'Desarrollo',
            'Recursos Humanos' => 'Recursos Humanos',
            'Contabilidad' => 'Contabilidad'
            ], null , ['class' => 'form-group']) !!} 
  </div>
  <div class="form-group">
    <!--<label for="formacionAcademica">Formacion Académica</label>-->
    {!! Form::label ('formacionAcademica', 'Formación Académica')!!}
    <!--<input name="formacionAcademica" value="{{$empleado->formacionAcademica ?? ''}}" class="form-control" id="formacionAcademica">-->
    {!! Form::text ('formacionAcademica', null, ['class' => 'form-control']) !!}
  </div>
    <!--<label for="fechaDeNacimiento">Fecha De Nacimiento</label>--> 
    {!! Form::label ('fechaDeNacimiento', 'Fecha De Nacimiento')!!}
    <!--<input type="date" name="fechaDeNacimiento" value="{{isset($empleado) ? $empleado->fechaDeNacimiento->toDateString() : ''}}" class="form-control" id="fechaDeNacimiento" placeholder="yyyy/mm/dd">--> 
    {!! Form::date('fechaDeNacimiento', $empleado->fechaDeNacimiento ?? '', ['class' => 'form-control']) !!}
  <div class="form-group">
    <!--<label for="fechaDeContratacion">Fecha De Contratacion</label>-->
    {!! Form::label ('fechaDeContratacion', 'Fecha De Contratacion')!!}
    <!--<input type="date" name="fechaDeContratacion" value="{{isset($empleado) ? $empleado->fechaDeContratacion->toDateString() : ''}}"class="form-control" id="fechaDeContratacion" placeholder="yyyy/mm/dd">-->
    {!! Form::date('fechaDeContratacion', $empleado->fechaDeContratacion ?? '', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <!--label for="correo">Email address</label-->
    {!! Form::label ('proyecto_id', 'Proyecto')!!}
    <!--input name="correo" value="{{$empleado->correo ?? ''}}" type="email" class="form-control" id="correo" placeholder="name@example.com"-->
    
    {!! Form::select ('proyecto_id', $proyecto, null , ['class' => 'form-group']) !!}
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
{!! Form::close() !!}