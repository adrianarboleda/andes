@if(isset($empleado))
  <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
  <input type="hidden" name="_method" value="PATCH">
@else
  <form action="{{ route('empleados.store') }}" method="POST">
@endif
  @csrf
  <div class="form-group">
    <label for="nombre">Nombre completo</label>
    <input name="nombre" value="{{$empleado->nombre ?? ''}}" class="form-control" id="nombre">
  </div>   
  <div class="form-group">
    <label for="correo">Email address</label>
    <input name="correo" value="{{$empleado->correo ?? ''}}" type="email" class="form-control" id="correo" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="area">Area de trabajo</label>
    <input name = "area" value="{{$empleado->area ?? ''}}" class="form-control" list="area">
        <datalist id="area">
            <option label="Mantenimiento" value="Mantenimiento">
            <option label="Planeacion" value="Planeacion">
            <option label="Desarrollo" value="Desarollo">
            <option label="Recursos Humanos" value="Recursos Humanos">
            <option label="Contabilidad" value="Contabilidad">
        </datalist>
  </div>
  <div class="form-group">
    <label for="formacionAcademica">Formacion Académica</label>
    <input name="formacionAcademica" value="{{$empleado->formacionAcademica ?? ''}}" class="form-control" id="formacionAcademica">
  </div>
    <label for="fechaDeNacimiento">Fecha De Nacimiento</label>
    <input type="date" name="fechaDeNacimiento" value="{{$empleado->fechaDeNacimiento->toDateString() ?? ''}}" class="form-control" id="fechaDeNacimiento" placeholder="yyyy/mm/dd">
  <div class="form-group">
    <label for="fechaDeContratacion">Fecha De Contratacion</label>
    <input type="date" name="fechaDeContratacion" value="{{$empleado->fechaDeContratacion->toDateString() ?? ''}}"class="form-control" id="fechaDeContratacion" placeholder="yyyy/mm/dd">
  </div>
  <div class="form-group">
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>