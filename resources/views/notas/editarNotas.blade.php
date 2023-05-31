@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4 class="text-center mt-4">Editar Notas</h4>
        <div class="row">
            <div class="col">
                <form action="{{ route('updateNotas', $items->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    {{-- <label for="nombreAlumnosCreditos">Nombre del Alumno</label>
                    <select name="nombreAlumnosCreditos" id="nombreAlumnosCreditos" class="form-select" required>
                        <option value="" selected>Selecciona una opcion</option>
                        @foreach ($alumnosDatos as $item)
                            <option value="{{ $item->nombre }}" @if ($item->nombre == $items->nombreAlumnosCreditos) selected @endif>{{ $item->nombre }}</option>
                        @endforeach
                    </select> --}}

                    <div class="row">
                        <div class="col">

                            <label for="nombreAlumnoNotas">Nombre del Alumno</label>
                            <select name="nombreAlumnoNotas" id="nombreAlumnoNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $item)
                                    <option value="{{ $item->nombre }}"@if ($item->nombre == $items->nombreAlumnoNotas) selected @endif>{{ $item->nombre }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoPaternoNotas">Apellido Paterno</label>
                            <select name="apellidoPaternoNotas" id="apellidoPaternoNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $item)
                                    <option value="{{ $item->apellidoPaterno }}" @if ($item->apellidoPaterno == $items->apellidoPaternoNotas) selected @endif>{{ $item->apellidoPaterno }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoMaternoNotas">Apellido Materno</label>
                            <select name="apellidoMaternoNotas" id="apellidoMaternoNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $item)
                                    <option value="{{ $item->apellidoMaterno }}" @if ($item->apellidoMaterno == $items->apellidoMaternoNotas) selected @endif>{{ $item->apellidoMaterno }}</option>
                                @endforeach
                            </select>

                            <label for="noControlNotas">No. Control</label>
                            <select name="noControlNotas" id="noControlNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $item)
                                    <option value="{{ $item->noControl }}" @if ($item->noControl == $items->noControlNotas) selected @endif>{{ $item->noControl }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col">

                            <label for="carreraNotas">Carrera</label>
                            <select name="carreraNotas" id="carreraNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($carreras as $item)
                                    <option value="{{ $item->nombre }}" @if ($item->nombre == $items->carreraNotas) selected @endif>{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            
                            <label for="evento">Evento</label>
                            <select name="evento" id="evento" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($eventos as $item)
                                    <option value="{{ $item->nombreEvento }}" @if ($item->nombreEvento == $items->evento) selected @endif>{{ $item->nombreEvento }}</option>
                                @endforeach
                            </select>

                            <label for="horas">Horas de Participación</label>
                            <input type="number" name="horas" id="horas" class="form-control" value="{{ $items->horas }}" required>

                            
                            <label for="fecha">Fecha de Participación</label>
                            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $items->fecha }}" required>
                        </div>
                    </div>
                    
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="/vistaNotas" class="btn btn-info mt-3">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection

