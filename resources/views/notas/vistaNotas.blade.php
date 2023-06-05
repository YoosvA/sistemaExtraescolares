
@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4>Notas de Participacion</h4>
        <a href="/crearNotas" class="btn btn-primary mt-3"><i class="fas fa-user-plus"></i> Agregar Datos</a>
        <a href="/crearEventos" class="btn btn-info mt-3"><i class="far fa-calendar-plus"></i> Agregar Evento</a>
        <a href="/inicio" class="btn btn-danger mt-3 ms-2"><i class="fas fa-sign-out-alt"></i> Regresar</a>
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
                                    <th>Carrera</th>
                                    <th>Evento</th>
                                    <th>Horas De Participación</th>
                                    <th>Fecha</th>
                                    <th>Periodo</th>
                                    <th>Grupo</th>
                                    <th>Generar Nota</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombreAlumnoNotas }}</td>
                                        <td>{{ $item->apellidoPaternoNotas }}</td>
                                        <td>{{ $item->apellidoMaternoNotas }}</td>
                                        <td>{{ $item->noControlNotas }}</td>
                                        <td>{{ $item->carreraNotas }}</td>
                                        <td>{{ $item->evento }}</td>
                                        <td>{{ $item->horas }}</td>
                                        <td>{{ $item->fecha }}</td>
                                        <td>{{ $item->periodo }}</td>
                                        <td>{{ $item->grupo }}</td>
                                        <td>
                                            <a href="{{ route('verPDF', $item->id) }}" class="btn btn-success" target="_blank"><i class="fas fa-file-pdf"></i></a>
                                        </td>
                                        
                                        <td>
                                            <br>
                                            <a href="{{ route('editarNotas', $item->id) }}" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('destroyNotas', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
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
