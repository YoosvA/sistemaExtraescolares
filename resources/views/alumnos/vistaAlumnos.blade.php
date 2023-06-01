
@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4>Agregar Datos Alumno</h4>
        <a href="/crearAlumnos" class="btn btn-primary mt-3">Agregar Alumno</a>
        <a href="/inicio" class="btn btn-danger mt-3 ms-2">Regresar</a>
        <div class="row">
            <div class="col mt-4">
                <div class="card">
                    <div class="card-body">
                        <table class="display responsive nowrap mt-4" style="width:100%" id="table">
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
                                            <a href="{{ route('editarAlumnos', $item->id) }}" class="btn btn-warning">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('destroy', $item->id) }}" method="POST">
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
    </div>
@endsection
