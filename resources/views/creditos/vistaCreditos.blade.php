@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4>Creditos</h4>
        <a href="/crearCreditos" class="btn btn-primary mt-3">Agregar Creditos</a>
        <a href="/crearCarpetas" class="btn btn-info mt-3 ms-2">Agregar Carpeta</a>
        <a href="/inicio" class="btn btn-danger mt-3 ms-2">Regresar</a>
        <div class="row">
            <div class="col mt-4">
                <div class="card">
                    <div class="card-body">
                        <table class="display responsive nowrap mt-4" style="width:100%" id="table">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Credito</th>
                                    <th>Mooc</th>
                                    <th>Constancia</th>
                                    <th>Oficio de Liberacion</th>
                                    <th>Evidencia</th>
                                    <th>Carpeta Fisica</th>
                                    <th>Estado</th>
                                    <th>Fecha de Registro</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombreCredito }}</td>
                                        <td>
                                            <a href="{{ asset($item->mooc) }}" target="_blank">Mostrar</a>
                                          
                                        </td>
        
                                        <td>
                                            <a href="{{ asset($item->constancia) }}" target="_blank">Mostrar</a>
                                        </td>
                                        <td>
                                            <a href="{{ asset($item->oficioLiberacion) }}" target="_blank">Mostrar</a>
                                        </td>
                                        <td>
                                            <a href="{{ asset($item->evidencia) }}" target="_blank">Mostrar</a>
                                        </td>
                                        <td>{{ $item->carpeta }}</td>
                                        <td>
                                            <form action="{{ route('cambiarEstado', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="btn {{ $item->estado === 'Liberado' ? 'btn-success' : 'btn-primary' }}">
                                                    {{ $item->estado ?: 'En proceso'}}
                                                </button>
                                            </form>
                                        </td>
                                        <td> {{ $item->created_at }} </td>
                                        <td>
                                            <br>
                                            <a href="{{ route('editarCreditos', $item->id) }}" class="btn btn-warning">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('destroyCreditos', $item->id) }}" method="POST">
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
