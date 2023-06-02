@extends('layouts/main')

@section('contenido')
<!--Inicio De Container-->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido Inicio-->
                <h1 class="mt-4">Agregar Datos Alumno</h1>
                <h2 class="ms-4">Intrucciones</h2>
                <h5>En estos 2 botones tendras opciones donde contendra una de agregar alumno <br>
                    donde tienes que meter informacion para agregar un nuevo alumno. <br>
                    el boton de regresar te mostraran el mismo menú que puedes ocupar</h5>
                <!--Parte De Botones Inicio-->
                <div class="card border-0" style="width: 40rem;">
                    <div class="card-body">
                        <!--Contenido De Card Botones Dentro Inicio-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border-0 text-center">
                                    <div class="card-body">
                                        <!--Contenido De Boton Agregar Alumno Inicio-->
                                        <div class="d-grid gap-2">
                                            <a href="/crearAlumnos" class="btn colorDeBoton mt-3 rounded-pill text-white">Agregar Alumno</a>
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
                        </div>
                        <!--Contenido De Card Botones Fin-->
                    </div>
                </div>
                <!--Parte De Botones Fin-->
                <!--Contenido Card Inicio-->   
                <div class="card shadow-lg bg-body rounded border-0 rounded-5">
                    <div class="card-body">
                        <!--Contenido De Informacion Card Inicio-->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="display responsive nowrap" style="width:100%" id="table">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido Paterno</th>
                                                    <th>Apellido Materno</th>
                                                    <th>Numero de Control</th>
                                                    <th>Telefono Celular</th>
                                                    <th>Carrera</th>
                                                    <th>Fecha de Nacimiento</th>
                                                    <th>Escuela de Procedencia</th>
                                                    <th>Fecha de Ingreso al Tecnologico</th>
                                                    <th>Editar</th>
                                                    <th>Eliminar</th>
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
                                                        <td>{{ $item->fechaNac }}</td>
                                                        <td>{{ $item->escuelaProcedencia }}</td>
                                                        <td>{{ $item->fechaIngreso }}</td>
                                                        <td>
                                                            <br>
                                                            <a href="{{ route('editarAlumnos', $item->id) }}"
                                                                class="btn btn-warning">Editar</a>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger">Eliminar</button>
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
