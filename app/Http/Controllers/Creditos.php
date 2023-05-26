<?php

namespace App\Http\Controllers;

use App\Models\Carpeta;
use App\Models\Credito;
use Illuminate\Http\Request;

class Creditos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = "Creditos";
        $items = Credito::all();
        return view('/creditos/vistaCreditos', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar Creditos';
        // $carreras = Credito::all();
        $items = Credito::all();
        return view('/creditos/crearCreditos', compact('titulo', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Credito();
        $item->nombreCredito = $request->nombreCredito;
        $item->mooc = $request->mooc;
        $item->constancia = $request->constancia;
        $item->oficioLiberacion = $request->oficioLiberacion;
        $item->evidencia = $request->evidencia;
        $item->carpeta = $request->carpeta;
        $item->save();
        return redirect('/vistaCreditos');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Credito::find($id);
        $item->delete();
        return redirect('/vistaCreditos');
    }

    public function cambiarEstado($id){
        $item = Credito::find($id);
    
        if ($item->estado === 'Liberado') {
            $item->estado = 'En proceso';
        } else {
            $item->estado = 'Liberado';
        }
        
        $item->save();
        return redirect()->back();
    }
    


    public function createCarpetas(){
        $titulo = 'Agregar Carpetas';
        $items = Carpeta::all();
        return view('/creditos/crearCarpetas', compact('titulo', 'items'));
    }

    public function storeCarpetas(Request $request)
    {
        $item = new Carpeta();
        $item->nombreCarpeta = $request->nombreCarpeta;
        $item->save();
        return redirect('/vistaCreditos');
    }
}
