<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\carreraCatalogo;
use Illuminate\Http\Request;

class Alumnos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $titulo = "Datos Alumnos";
        $items = Alumno::all();
        return view('/alumnos/vistaAlumnos', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $titulo = 'Agregar Alumnos';
        $items = Alumno::all();
        return view('/alumnos/crearAlumnos', compact('titulo', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $item = new Alumno();
        $item->nombre = $request->nombre;
        $item->apellidoPaterno = $request->apellidoPaterno;
        $item->apellidoMaterno = $request->apellidoMaterno;
        $item->noControl = $request->noControl;
        $item->telefono = $request->telefono;
        $item->carrera = $request->carrera;
        $item->fechaNac = $request->fechaNac;
        $item->escuelaProcedencia = $request->escuelaProcedencia;
        $item->fechaIngreso = $request->fechaIngreso;
        $item->save();
        return redirect('/vistaAlumnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $titulo = 'Actualizar Datos Alumno';
        $items = Alumno::find($id);
        $items2 = carreraCatalogo::all();
        return view('/alumnos/editarAlumnos', compact('titulo', 'items','items2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $item = Alumno::find($id);
        $item->nombre = $request->nombre;
        $item->apellidoPaterno = $request->apellidoPaterno;
        $item->apellidoMaterno = $request->apellidoMaterno;
        $item->noControl = $request->noControl;
        $item->telefono = $request->telefono;
        $item->carrera = $request->carrera;
        $item->fechaNac = $request->fechaNac;
        $item->escuelaProcedencia = $request->escuelaProcedencia;
        $item->fechaIngreso = $request->fechaIngreso;
        $item->save();
        return redirect('/vistaAlumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
