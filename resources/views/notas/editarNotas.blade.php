@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido Container Fin-->
                <h1 class="mt-4">Editar Notas</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">Ingresa todos los datos que se te piden... </h5>
                <!--Contenido Texto Arriba-->
                <!--Contenid De Card Inicio-->
                <div class="card">
                    <div class="card-body">
                        <!---->
                        <form action="{{ route('updateNotas', $items->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col mt-4 mb-4 ms-4 mx-4">

                                    <h4>Nombre del Alumno</h4>
                                    <select name="nombreAlumnoNotas" id="nombreAlumnoNotas" class="form-select" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $item)
                                            <option
                                                value="{{ $item->nombre }}"@if ($item->nombre == $items->nombreAlumnoNotas) selected @endif>
                                                {{ $item->nombre }}</option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Apellido Paterno</h4>
                                    <select name="apellidoPaternoNotas" id="apellidoPaternoNotas" class="form-select"
                                        required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $item)
                                            <option value="{{ $item->apellidoPaterno }}"
                                                @if ($item->apellidoPaterno == $items->apellidoPaternoNotas) selected @endif>
                                                {{ $item->apellidoPaterno }}</option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Apellido Materno</h4>
                                    <select name="apellidoMaternoNotas" id="apellidoMaternoNotas" class="form-select"
                                        required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $item)
                                            <option value="{{ $item->apellidoMaterno }}"
                                                @if ($item->apellidoMaterno == $items->apellidoMaternoNotas) selected @endif>
                                                {{ $item->apellidoMaterno }}</option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">No. Control</h4>
                                    <select name="noControlNotas" id="noControlNotas" class="form-select" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $item)
                                            <option value="{{ $item->noControl }}"
                                                @if ($item->noControl == $items->noControlNotas) selected @endif>{{ $item->noControl }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Carrera</h4>
                                    <select name="carreraNotas" id="carreraNotas" class="form-select" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($carreras as $item)
                                            <option value="{{ $item->nombre }}"
                                                @if ($item->nombre == $items->carreraNotas) selected @endif>{{ $item->nombre }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col mt-4 mb-4 ms-4 mx-4">

                                    <h4>Evento</h4>
                                    <select name="evento" id="evento" class="form-select" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($eventos as $item)
                                            <option value="{{ $item->nombreEvento }}"
                                                @if ($item->nombreEvento == $items->evento) selected @endif>{{ $item->nombreEvento }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Horas de Participación</h4>
                                    <input type="number" name="horas" id="horas" class="form-control"
                                        value="{{ $items->horas }}" required min="5" max="20" step="5">


                                    <h4 class="mt-3">Fecha de Participación</h4>
                                    <input type="date" name="fecha" id="fecha" class="form-control"
                                        value="{{ $items->fecha }}" required>

                                    <h4 class="mt-3">Periodo Escolar</h4>
                                    <input type="text" name="periodo" id="periodo" class="form-control"
                                        value="{{ $items->periodo }}" required>

                                    <h4 class="mt-3">Grupo</h4>
                                    <input type="text" name="grupo" id="grupo" class="form-control"
                                        value="{{ $items->grupo }}" required>
                                </div>
                                <!--Contenido De Card Botones Inicio-->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <!--Contenido De Boton Inicio-->
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-warning mt-3"><i class="fas fa-save"></i>
                                                        Actualizar</button>
                                                </div>
                                                <!--Contenido De Boton Fin-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <!--Contenido De Boton Inicio-->
                                                <div class="d-grid gap-2">
                                                    <a href="/vistaNotas" class="btn btn-info mt-3"><i
                                                            class="fas fa-sign-out-alt"></i> Regresar</a>
                                                </div>
                                                <!--Contenido De Boton Fin-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Contenido De Card Botones Fin-->
                            </div>
                        </form>
                        <!---->
                    </div>
                </div>
                <!--Contenido De Card Fin-->
                <!--Contenido Container Fin-->
            </div>
        </div>
    </div>
@endsection
