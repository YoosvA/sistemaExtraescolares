<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Catalogocarrera;
use App\Models\Evento;
use App\Models\Nota;
use Illuminate\Http\Request;

use Dompdf\Dompdf;
use Dompdf\Options;


class Notas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware(['auth'])->only(['indexNotas','createNotas','editNotas','createEventos','verPDF']);
    }

    public function indexNotas(){
        $titulo = "vista Notas";
        $items = Nota::all();
        return view('/notas/vistaNotas', compact('titulo','items'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNotas(){
        $titulo = 'Agregar Datos Notas';
        $items = Nota::all();
        $alumnosDatos = Alumno::all();
        $carreras = Catalogocarrera::all();
        $eventos = Evento::all();
        return view('/notas/crearNotas', compact('titulo', 'items','alumnosDatos','carreras','eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNotas(Request $request){

        $item = new Nota();
        $item->nombreAlumnoNotas = $request->nombreAlumnoNotas;
        $item->apellidoPaternoNotas = $request->apellidoPaternoNotas;
        $item->apellidoMaternoNotas = $request->apellidoMaternoNotas;
        $item->noControlNotas = $request->noControlNotas;
        $item->carreraNotas = $request->carreraNotas;
        $item->evento = $request->evento;
        $item->horas = $request->horas;
        $item->fecha = $request->fecha;
        $item->periodo = $request->periodo;
        $item->grupo = $request->grupo;
        $item->save();
        return redirect('/vistaNotas');

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
    public function editNotas($id)
    {
        $titulo = 'Editar Datos Notas';
        $items = Nota::find($id);
        $alumnosDatos = Alumno::all();
        $carreras = Catalogocarrera::all();
        $eventos = Evento::all();
        return view('/notas/editarNotas', compact('titulo', 'items','alumnosDatos','carreras','eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNotas(Request $request, $id)
    {
        $item = Nota::find($id);
        $item->nombreAlumnoNotas = $request->nombreAlumnoNotas;
        $item->apellidoPaternoNotas = $request->apellidoPaternoNotas;
        $item->apellidoMaternoNotas = $request->apellidoMaternoNotas;
        $item->noControlNotas = $request->noControlNotas;
        $item->carreraNotas = $request->carreraNotas;
        $item->evento = $request->evento;
        $item->horas = $request->horas;
        $item->fecha = $request->fecha;
        $item->periodo = $request->periodo;
        $item->grupo = $request->grupo;
        $item->save();
        return redirect('/vistaNotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyNotas($id){
        $item = Nota::find($id);
        $item->delete();
        return redirect('/vistaNotas');
    }

    public function createEventos(){
        $titulo = 'Agregar Eventos';
        $items = Evento::all();
        return view('/notas/crearEventos', compact('titulo', 'items'));
    }

    public function storeEventos(Request $request)
    {
        $item = new Evento();
        $item->nombreEvento = $request->nombreEvento;
        $item->save();
        return redirect('/vistaNotas');
    }

    public function verPDF($id)
    {
        $nota = Nota::find($id);

        set_time_limit(120);
    
        // Renderizar la vista en HTML
        $html = view('notas.generarPDF', compact('nota'))->render();
    
        // Crear instancia de Dompdf con opciones
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true); // Habilitar carga de recursos remotos
        $dompdf = new Dompdf($options);
    
        // Cargar contenido HTML en Dompdf
        $dompdf->loadHtml($html);
    
        // Renderizar el PDF
        $dompdf->render();
    
        // Obtener el contenido del PDF generado
        $output = $dompdf->output();
    
        // Mostrar el PDF en el navegador
        return response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="nota.pdf"'
        ]);
    }

}
