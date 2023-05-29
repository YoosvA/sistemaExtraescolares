<?php

namespace App\Http\Controllers;

use App\Models\Carpeta;
use App\Models\Catalogocredito;
use App\Models\Credito;
use Illuminate\Http\Request;

class Creditos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCreditos()
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
    public function crearCreditos()
    {
        $titulo = 'Agregar Creditos';
        $carpetas = Carpeta::all();
        $items = Credito::all();
        $creditosrol = Catalogocredito::all();
        return view('/creditos/crearCreditos', compact('titulo', 'items','carpetas','creditosrol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCreditos(Request $request)
    {
        $item = new Credito();
        $item->nombreCredito = $request->nombreCredito;
        
        $item->carpeta = $request->carpeta;

        // Guardar el archivo
        // $path = $request->file('mooc')->asset('public/archivosServidor');
        // $item->mooc = $path;
        
        if(!empty($request->mooc)){
        $pathmooc = $request->file('mooc')->store('archivosServidor', 'public');
        $item->mooc = $pathmooc;
        }
        if(!empty($request->constancia)){
        $pathconstancia = $request->file('constancia')->store('archivosServidor', 'public');
        $item->constancia = $pathconstancia;
        }
        if(!empty($request->oficioLiberacion)){
        $pathoficioLiberacion = $request->file('oficioLiberacion')->store('archivosServidor', 'public');
        $item->oficioLiberacion = $pathoficioLiberacion;
        }
        if(!empty($request->evidencia)){
        $pathevidencia = $request->file('evidencia')->store('archivosServidor', 'public');
        $item->evidencia = $pathevidencia;
        }
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
    public function editCreditos($id)
    {
        $titulo = 'Actualizar Creditos';
        $carpetas = Carpeta::all();
        $items = Credito::find($id);
        $creditosrol = Catalogocredito::all();
        return view('/creditos/editarCreditos', compact('titulo', 'items', 'carpetas', 'creditosrol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCreditos(Request $request, $id)
    {
        $item = Credito::find($id);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCreditos($id)
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
