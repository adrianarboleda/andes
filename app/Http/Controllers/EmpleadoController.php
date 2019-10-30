<?php

namespace App\Http\Controllers;

use App\empleado;
use App\Proyecto;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.empleadosIndex', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$proyecto = Proyecto::all();
        $proyecto = Proyecto::pluck('nombre','id');
        return view('empleados.empleadosForm', compact('proyecto'));
        
        //return view('empleados.empleadosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input());
        $request->validate([
            'nombre' => 'required|min:2|max:265',
            'edad' => 'numeric',
            'formacionAcademica' => 'required|min:3|max:50',
            'correo' => 'email',
            'fechaDeNacimiento' => 'date',
            'fechaDeContratacion' => 'date',
            'proyecto_id' => 'required'
        ]);

        $empleado = new Empleado([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'area' =>$request->area,
            'formacionAcademica' => $request->formacionAcademica,
            'correo' => $request->correo,
            'fechaDeNacimiento' => $request->fechaDeNacimiento,
            'fechaDeContratacion' => $request->fechaDeContratacion,
            'proyecto_id' => $request->proyecto_id
        ]);

        //return $request->proyecto_id;
        $proyecto = Proyecto::findorfail($request->proyecto_id);
        $proyecto->empleado()->save($empleado);
        //$empleados = Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        return view('empleados.empleadosShow', compact('empleado'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado, proyecto $proyecto)
    {
        return view('empleados.empleadosForm', compact('empleado', 'proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {
        $empleado->nombre = $request->nombre;
        $empleado->correo = $request->correo;
        $empleado->fechaDeContratacion = $request->fechaDeContratacion;
        $empleado->fechaDeNacimiento = $request->fechaDeNacimiento; 
        $empleado->area = $request->area;
        $empleado->formacionAcademica = $request->formacionAcademica;
        $empleado->proyecto_id = $request->proyecto_id;
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
