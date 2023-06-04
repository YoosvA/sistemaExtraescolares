
@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4>Generar Oficio de Liberación (Credito)</h4>
        <a href="/crearOficios" class="btn btn-primary mt-3"><i class="fas fa-user-plus"></i> Agregar Datos Del Estudiante</a>
        <a href="/vistaCreditos" class="btn btn-danger mt-3 ms-2"><i class="fas fa-sign-out-alt"></i> Regresar</a>
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
                                    <th>Credito</th>
                                    <th>Periodo Escolar</th>
                                    <th>Fecha</th>
                                    <th>Generar Oficio</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombreEstudiante }}</td>
                                        <td>{{ $item->apellidoPatEstudiante }}</td>
                                        <td>{{ $item->apellidoMatEstudiante }}</td>
                                        <td>{{ $item->noControlEstudiante }}</td>
                                        <td>{{ $item->carreraEstudiante }}</td>
                                        <td>{{ $item->creditoEstudiante }}</td>
                                        <td>{{ $item->periodoEstudiante }}</td>
                                        <td>{{ $item->created_at }}</td>
                    
                                        <td>
                                            <a href="{{ route('verPDFOficios', $item->id) }}" class="btn btn-success" target="_blank"><i class="fas fa-file-pdf"></i></a>
                                        </td>
                                        
                                        <td>
                                            <br>
                                            
                                            <a href="{{ route('editarOficios', $item->id) }}" class="btn btn-warning"><i class="fas fa-user-edit"></i> Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('destroyOficios', $item->id) }}" method="POST">
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
