@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-4">Notas de Participacion</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">En tos 3 botones tendras opciones donde contendran diferentes vistas...</h5>
                <!--Texto arriba Informacion-->
                <!--Card Contenido De Botones Inicio-->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!--Contenido Inicio Boton-->
                                <div class="d-grid gap-2">
                                    <a href="/crearNotas" class="btn guardarBoton mt-3 rounded-pill"><i
                                            class="fas fa-user-plus"></i> Agregar Datos</a>
                                </div>
                                <!--Contenido Fin Boton-->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!--Contenido Inicio Boton-->
                                <div class="d-grid gap-2">
                                    <a href="/crearEventos" class="btn guardarBoton mt-3 rounded-pill"><i
                                            class="far fa-calendar-plus"></i> Agregar Evento</a>
                                </div>
                                <!--Contenido Fin Boton-->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!--Contenido Inicio Boton-->
                                <div class="d-grid gap-2">
                                    <a href="/inicio" class="btn RegresarBoton mt-3 rounded-pill"><i
                                            class="fas fa-sign-out-alt"></i> Regresar</a>
                                </div>
                                <!--Contenido Fin Boton-->
                            </div>
                        </div>
                    </div>

                </div>
                <!--Card Contenido De Botones Fin-->

                <!--Card Inicio Contenido Card Tendra Otro Card-->
                <div class="card shadow-lg  bg-body rounded border-0 rounded-5">
                    <div class="card-body">
                        <!--Contenido Dentro De Card Inicio-->
                        <div class="card mt-4 mb-4 ms-4 mx-4">
                            <div class="card-body">
                                <table class="display responsive nowrap mt-4" style="width:100%" id="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Apellido Paterno</th>
                                            <th class="text-center">Apellido Materno</th>
                                            <th class="text-center">Numero de Control</th>
                                            <th class="text-center">Carrera</th>
                                            <th class="text-center">Evento</th>
                                            <th class="text-center">Horas De Participación</th>
                                            <th class="text-center">Fecha</th>
                                            <th class="text-center">Periodo</th>
                                            <th class="text-center">Grupo</th>
                                            <th class="text-center">Generar Nota</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nombreAlumnoNotas }}</td>
                                                <td>{{ $item->apellidoPaternoNotas }}</td>
                                                <td>{{ $item->apellidoMaternoNotas }}</td>
                                                <td>{{ $item->noControlNotas }}</td>
                                                <td>{{ $item->carreraNotas }}</td>
                                                <td> {{ $item->evento }}</td>
                                                <td><br>{{ $item->horas }}</td>
                                                <td><br>{{ $item->fecha }}</td>
                                                <td><br>{{ $item->periodo }}</td>
                                                <td><br>{{ $item->grupo }}</td>
                                                <td>
                                                    <br>
                                                    <a href="{{ route('verPDF', $item->id) }}" class="btn btn-success"
                                                        target="_blank"><i class="fas fa-file-pdf"></i></a>
                                                </td>
        
                                                <td>
                                                    <br>
                                                    <a href="{{ route('editarNotas', $item->id) }}" class="btn btn-warning"><i
                                                            class="fas fa-user-edit"></i> Editar</a>
                                                </td>
                                                <td>
                                                    <br>
                                                    <form action="{{ route('destroyNotas', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"><i class="fas fa-trash"></i>
                                                            Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Contenido Dentro De Card Fin-->
                    </div>
                </div>  
                <!--Card Fin Contenido Card Tendra Otro Card-->
            </div>
        </div>
    </div>
@endsection
