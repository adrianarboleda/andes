<?php

namespace App\Http\Controllers;

use App\empleado;
use App\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.proyectosIndex', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto = Empleado::all();
        return view('proyectos.proyectosform', compact('empleados'));
        //return view('proyectos.proyectosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fechaFinal' => 'date'
        ]);


        $proyecto = new proyecto([
            'nombre' => $request->nombre,
            'fechaFinal' => $request->fechaFinal
        ]);

        $proyecto = Proyecto::create($request->all());
        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(proyecto $proyecto)
    {
        return view('proyectos.proyectosShow', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(proyecto $proyecto)
    {
        return view('proyectos.proyectosForm', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proyecto $proyecto)
    {
        $proyecto->nombre = $request->nombre;
        $proyecto->fechaFinal = $request->fechaFinal;
        $proyecto->save();
        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(proyecto $proyecto)
    {
        //
    }
}
