<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Catalogocarrera;
use App\Models\Catalogocredito;
use App\Models\Oficio;
use Illuminate\Http\Request;

use Dompdf\Dompdf;
use Dompdf\Options;

class Oficios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexOficios()
    {
        $titulo = "vista Oficios de Liberación";
        $items = Oficio::all();
        return view('/oficiosLiberacion/vistaOficios', compact('titulo','items'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOficios()
    {
        $titulo = 'Agregar Datos Para Generar Oficio';
        $items = Oficio::all();
        $alumnosDatos = Alumno::all();
        $carreras = Catalogocarrera::all();
        $creditosrol = Catalogocredito::all();
        return view('/oficiosLiberacion/crearOficios', compact('titulo', 'items','alumnosDatos','carreras','creditosrol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeOficios(Request $request)
    {
        $item = new Oficio();
        $item->nombreEstudiante = $request->nombreEstudiante;
        $item->apellidoPatEstudiante = $request->apellidoPatEstudiante;
        $item->apellidoMatEstudiante = $request->apellidoMatEstudiante;
        $item->noControlEstudiante = $request->noControlEstudiante;
        $item->carreraEstudiante = $request->carreraEstudiante;
        $item->creditoEstudiante = $request->creditoEstudiante;
        $item->periodoEstudiante = $request->periodoEstudiante;
        $item->save();
        return redirect('/vistaOficios');
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
    public function editOficios($id)
    {
        $titulo = 'Editar Datos Para Generar Oficio';
        $items = Oficio::find($id);
        $alumnosDatos = Alumno::all();
        $carreras = Catalogocarrera::all();
        $creditosrol = Catalogocredito::all();
        return view('/oficiosLiberacion/editarOficios', compact('titulo', 'items','alumnosDatos','carreras','creditosrol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateOficios(Request $request, $id)
    {
        $item = Oficio::find($id);
        $item->nombreEstudiante = $request->nombreEstudiante;
        $item->apellidoPatEstudiante = $request->apellidoPatEstudiante;
        $item->apellidoMatEstudiante = $request->apellidoMatEstudiante;
        $item->noControlEstudiante = $request->noControlEstudiante;
        $item->carreraEstudiante = $request->carreraEstudiante;
        $item->creditoEstudiante = $request->creditoEstudiante;
        $item->periodoEstudiante = $request->periodoEstudiante;
        $item->save();
        return redirect('/vistaOficios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyOficios($id)
    {
        $item = Oficio::find($id);
        $item->delete();
        return redirect('/vistaOficios');
    }

    public function verPDFOficios($id)
    {
        $oficioLiberacion = Oficio::find($id);

        set_time_limit(120);
    
        // Renderizar la vista en HTML
        $html = view('oficiosLiberacion.generarPDFOficios', compact('oficioLiberacion'))->render();
    
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
            'Content-Disposition' => 'inline; filename="oficioLiberacion.pdf"'
        ]);
    }
}
