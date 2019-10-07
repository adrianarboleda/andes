<div clas="container">
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <table class = "table">
                            <thead>
                            <tr>
                            <th>ID</th><th>Nombre</th><th>Correo</th><th>Area</th><th>Formacion Academica</th><th>Fecha de Nacimiento</th><th>Fecha de Contratacion</th>
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
                                <td>{{ $empleado->fechaDeNacimiento }}</td>
                                <td>{{ $empleado->fechaDeContratacion }}</td>
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