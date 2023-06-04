@extends('layouts/main')

@section('contenido')
    <!--Inicio De Container-->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido Inicio-->
                <h1 class="mt-4">Agregar Datos Alumno</h1>
                <h2 class="ms-4 mt-3">Instrucciones</h2>
                <h5 class="ms-4">Estos 2 botones tendrán las funciones de agregar alumno
                    donde ingresaras por medio de un formulario información para agregar un nuevo alumno, El botón de regresar te llevara a la vista principal.
                </h5>
                <!--Parte De Botones Inicio-->
                <div class="card border-0">
                    <div class="card-body">
                        <!--Contenido De Card Botones Dentro Inicio-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border-0 text-center">
                                    <div class="card-body">
                                        <!--Contenido De Boton Agregar Alumno Inicio-->
                                        <div class="d-grid gap-2">
                                            <a href="/crearAlumnos" class="btn colorDeBotonazul  mt-3 rounded-pill text-white">Agregar Alumno</a>
                                          </div>

                                        <!--Contenido De Boton Agregar Alumno Fin-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border-0 text-center">
                                    <div class="card-body">
                                        <!--Contenido de Boton Regresar Inicio-->
                                        <div class="d-grid gap-2">
                                            <a href="/inicio" class="btn btn-danger mt-3 rounded-pill">Regresar</a>
                                        </div>

                                <!--Contenido de Boton Regresar fin-->
                            </div>
                        </div>
                    </div>
                    <!--Card Contenido Basio Inicio-->
                    <div class="col">
                        <div class="card colorTransparente border-0">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    <!--Card Contenido Basio Fin-->
                    <!--Card Contenido Basio Inicio-->
                    <div class="col">
                        <div class="card colorTransparente border-0">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    <!--Card Contenido Basio Fin-->
                </div>







                <!--Parte De Botones Fin-->
                <!--Contenido Card Inicio-->
                <div class="card shadow-lg bg-body rounded border-0 rounded-5">
                    <div class="card-body">
                        <!--Contenido De Informacion Card Inicio-->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <!--Dentro De Una Card Esta La Tabla-->
                                <div class="card">
                                    <div class="card-body">
                                        <table class="display responsive nowrap text-center" style="width:100%"
                                            id="table">
                                            <thead class="text-center">
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Nombre</th>
                                                    <th class="text-center">Apellido Paterno</th>
                                                    <th class="text-center">Apellido Materno</th>
                                                    <th class="text-center">Numero de Control</th>
                                                    <th class="text-center">Teléfono Celular</th>
                                                    <th class="text-center">Carrera</th>
                                                    <th class="text-center">Fecha de Nacimiento</th>
                                                    <th class="text-center">Escuela de Procedencia</th>
                                                    <th class="text-center">Fecha de ingresó al Tecnológico</th>
                                                    <th class="text-center">Editar</th>
                                                    <th class="text-center">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->apellidoPaterno }}</td>
                                                        <td>{{ $item->apellidoMaterno }}</td>
                                                        <td>{{ $item->noControl }}</td>
                                                        <td>{{ $item->telefono }}</td>
                                                        <td>{{ $item->carrera }}</td>
                                                        <td><br>{{ $item->fechaNac }}<br></td>
                                                        <td><br>{{ $item->escuelaProcedencia }}<br></td>
                                                        <td><br>{{ $item->fechaIngreso }}<br></td>
                                                        <td>
                                                            <br>
                                                            <a href="{{ route('editarAlumnos', $item->id) }}"
                                                                class="btn btn-warning rounded-pill"><i class="fas fa-user-edit"></i> Editar</a>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger rounded-pill">Eliminar</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Informacion Card Fin-->
                    </div>
                </div>
                <!--Contenido Card Fin-->
            </div>
        </div>
    </div>
    <!--Fin De Card-->
@endsection
