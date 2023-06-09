@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br><br><br>
                <!--Card Principal Inicio-->
                <div class="card border-0 shadow-lg  bg-body rounded rounded-5">
                    <div class="card-body">
                        <!--Texto Principal Inicio-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <br><br>
                                        <h1 class="text-center mt-2">Generar Oficio de Liberación (Credito)</h1>
                                        <h2 class="mt-2 mb-2">Instrucciones</h2>
                                        <h5 class="mt-2">Ingresa todos los datos que se te piden</h5>
                                        <!--Seccion De Botones Inicio-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card colorTransparente border-0">
                                                    <div class="card-body">
                                                        <!---->
                                                        <!--Contenido De Boton Inicio Agregar-->
                                                        <div class="d-grid gap-2">
                                                            <a href="/crearOficios"
                                                                class="btn guardarBoton mt-2 rounded-pill"><i
                                                                    class="fas fa-user-plus"></i> Agregar</a>
                                                        </div>

                                                        <!--Contenido De Boton Fin Agregar-->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card colorTransparente border-0">
                                                    <div class="card-body">
                                                        <!---->
                                                        <!--Contenido De Boton Inicio Regresar-->
                                                        <div class="d-grid gap-2">
                                                            <a href="/vistaCreditos"
                                                                class="btn RegresarBoton mt-2  rounded-pill"><i
                                                                    class="fas fa-sign-out-alt"></i> Regresar</a>
                                                        </div>

                                                        <!--Contenido De Boton Fin Regresar-->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Seccion De Botones Fin-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0 ms-4">
                                    <div class="card-body ms-4">
                                        <!--Card Donde Contiene Img Inicio-->
                                        <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0 ms-4">
                                            <div class="card-body">
                                                <!--Contenido De Img Inicio-->
                                                <div class="text-center">
                                                    <img src="{{ asset('img/TecnmCircular.png') }}"
                                                        class="tamañoDeImgRedesSociales rounded-circle img-fluid"
                                                        alt="">
                                                </div>
                                                <!--Contenido De Img Fin-->
                                            </div>
                                        </div>
                                        <!--Card Donde Contiene Img Inicio--></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Texto Principal Fin-->
                        <!--Contenido Dentro De Otra Card Inicio-->
                        <div class="card mt-4 mb-4 ms-4 mx-4">
                            <div class="card-body shadow-sm bg-body rounded rounded-4 text-center">
                                <table class="display responsive nowrap mt-4 text-center shadow-sm bg-body rounded"
                                    style="width:100%" id="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="tex-center">No.</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Apellido Paterno</th>
                                            <th class="text-center">Apellido Materno</th>
                                            <th class="text-center">Numero de Control</th>
                                            <th class="text-center">Carrera</th>
                                            <th class="text-center">Credito</th>
                                            <th class="text-center">Periodo Escolar</th>
                                            <th class="text-center">Fecha</th>
                                            <th class="text-center">Generar Oficio</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nombreEstudiante }}</td>
                                                <td>{{ $item->apellidoPatEstudiante }}</td>
                                                <td>{{ $item->apellidoMatEstudiante }}</td>
                                                <td>{{ $item->noControlEstudiante }}</td>
                                                <td>{{ $item->carreraEstudiante }}</td>
                                                <td>{{ $item->creditoEstudiante }}</td>
                                                <td><br>{{ $item->periodoEstudiante }}</td>
                                                <td><br>{{ $item->created_at }}</td>

                                                <td>
                                                    <br>
                                                    <a href="{{ route('verPDFOficios', $item->id) }}" class="btn pdfBoton"
                                                        target="_blank"><i class="fas fa-file-pdf"></i></a>
                                                </td>

                                                <td>
                                                    <br>

                                                    <a href="{{ route('editarOficios', $item->id) }}"
                                                        class="btn EditarBoton"><i class="fas fa-user-edit"></i> Editar</a>
                                                </td>
                                                <td>
                                                    <br>
                                                    <form action="{{ route('destroyOficios', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn RegresarBoton"><i class="fas fa-trash"></i>
                                                            Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Contenido Dentro De Otra card Fin-->
                    </div>
                </div>
                <!--Card Principal Fin-->
                <!--Fin De Contenido De Container -->
            </div>
        </div>
    </div>
@endsection
