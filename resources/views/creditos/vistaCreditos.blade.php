@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido De Container Inicio-->
                <h1 class="mt-4">Creditos</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">En estos 4 botones tendras opciones donde contendra una de agregar creditos,
                    agregar carpeta y crear oficios de liberacion y regresar el menu por si te equivocas al tomar
                    una desicion.
                </h5>
                <!--Contenido De Card Botones Inicio Son 4-->
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!---->
                                <div class="d-grid gap-2">
                                    <a href="/crearCreditos" class="btn colorDeBotonazul mt-3 rounded-pill text-white">Agregar Creditos</a>
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!---->
                                <div class="d-grid gap-2">
                                    <a href="/crearCarpetas" class="btn colorDeBotonazul mt-3 rounded-pill text-white">Agregar Carpeta</a>
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!---->
                                <div class="d-grid gap-2">
                                    <a href="/vistaOficios" class="btn colorDeBotonazul mt-3 rounded-pill text-white">Crear Oficios de
                                        Liberacion</a>
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!---->
                                <div class="d-grid gap-2">
                                    <a href="/inicio" class="btn btn-danger mt-3 rounded-pill text-white">Regresar</a>
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Contenido De Card Botones Fin Son 4-->
                    <!--Contenido De Card Tabla Inicio-->
                        <div class="card shadow-lg bg-body rounded border-0 rounded-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-4 mb-4 ms-4 mx-4 text-center">
                                        <div class="card">
                                            <div class="card-body">
                                                <!--Contenido De Table Inicio-->
                                                <table class="display responsive nowrap mt-4" style="width:100%" id="table">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th class="text-center">No.</th>
                                                            <th class="text-center">Nombre</th>
                                                            <th class="text-center">Apellido Paterno</th>
                                                            <th class="text-center">Apellido Materno</th>
                                                            <th class="text-center">Credito</th>
                                                            <th class="text-center">Mooc</th>
                                                            <th class="text-center">Constancia</th>
                                                            <th class="text-center">Oficio de Liberacion</th>
                                                            <th class="text-center">Evidencia</th>
                                                            <th class="text-center">Carpeta Fisica</th>
                                                            <th class="text-center">Estado</th>
                                                            <th class="text-center">Fecha de Registro</th>
                                                            <th class="text-center">Editar</th>
                                                            <th class="text-center">Eliminar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($items as $item)
                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->nombreAlumnosCreditos }}</td>
                                                                <td>{{ $item->apellidoPaternoCreditos }}</td>
                                                                <td>{{ $item->apellidoMaternoCreditos }}</td>
                                                                <td>{{ $item->nombreCredito }}</td>
                                                                <td>
                                                                    @if (!empty($item->mooc))
                                                                        <a class="btn colorBoton1 rounded-pill text-white" href="{{ asset($item->mooc) }}"
                                                                            target="_blank">Mostrar</a>
                                                                    @else
                                                                        No se ha agregado el archivo
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if (!empty($item->constancia))
                                                                        <a class="btn colorBoton2 rounded-pill text-white" href="{{ asset($item->constancia) }}"
                                                                            target="_blank">Mostrar</a>
                                                                    @else
                                                                        No se ha agregado el archivo
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if (!empty($item->oficioLiberacion))
                                                                        <a class="btn colorBoton3 rounded-pill text-white" href="{{ asset($item->oficioLiberacion) }}"
                                                                            target="_blank">Mostrar</a>
                                                                    @else
                                                                        No se ha agregado el archivo
                                                                    @endif
                
                                                                </td>
                                                                <td>
                                                                    @if (!empty($item->evidencia))
                                                                        <a class="btn colorBoton4 rounded-pill text-white" href="{{ asset($item->evidencia) }}"
                                                                            target="_blank">Mostrar</a>
                                                                    @else
                                                                        No se ha agregado el archivo
                                                                    @endif
                                                                </td>
                                                                <td><br> {{ $item->carpeta }} <br></td>
                                                                <td>
                                                                    <form action="{{ route('cambiarEstado', $item->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button type="submit"
                                                                            class="btn btn-primary rounded-pill text-white {{ $item->estado === 'Liberado' ? 'btn btn-success' : 'btn btn-primary' }}">
                                                                            {{ $item->estado ?: 'En proceso' }}
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                                <td><br> {{ $item->created_at }} <br></td>
                                                                <td>
                                                                    <br>
                                                                    <a href="{{ route('editarCreditos', $item->id) }}"
                                                                        class="btn btn-warning rounded-pill text-white">Editar</a>
                                                                </td>
                                                                <td>
                                                                    <form action="{{ route('destroyCreditos', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-danger rounded-pill text-white">Eliminar</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <!--Contenido De Tabla Fin-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--Contenido De Card Tabla Fin-->
                <!--Contenido De Container Fin-->
            </div>
        </div>
    </div>
@endsection
