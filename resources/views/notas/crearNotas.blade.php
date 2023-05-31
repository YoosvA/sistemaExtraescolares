@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h4 class="text-center mt-4">Agregar Datos Notas</h4>
        <div class="row">
            <div class="col">
                <form action="/storeNotas" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col">

                            <label for="nombreAlumnoNotas">Nombre del Alumno</label>
                            <select name="nombreAlumnoNotas" id="nombreAlumnoNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->nombre }}">{{ $datos->nombre }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoPaternoNotas">Apellido Paterno</label>
                            <select name="apellidoPaternoNotas" id="apellidoPaternoNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->apellidoPaterno }}">{{ $datos->apellidoPaterno }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoMaternoNotas">Apellido Materno</label>
                            <select name="apellidoMaternoNotas" id="apellidoMaternoNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->apellidoMaterno }}">{{ $datos->apellidoMaterno }}</option>
                                @endforeach
                            </select>

                            <label for="noControlNotas">No. Control</label>
                            <select name="noControlNotas" id="noControlNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->noControl }}">{{ $datos->noControl }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col">

                            <label for="carreraNotas">Carrera</label>
                            <select name="carreraNotas" id="carreraNotas" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->nombre }}">{{ $carrera->nombre }}</option>
                                @endforeach
                            </select>
                            
                            <label for="evento">Evento</label>
                            <select name="evento" id="evento" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($eventos as $evento)
                                    <option value="{{ $evento->nombreEvento }}">{{ $evento->nombreEvento }}</option>
                                @endforeach
                            </select>

                            <label for="horas">Horas de Participación</label>
                            <input type="number" name="horas" id="horas" class="form-control" required>

                            
                            <label for="fecha">Fecha de Participación</label>
                            <input type="date" name="fecha" id="fecha" class="form-control" required>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-3"> Guardar</button>
                    <a href="/vistaNotas" class="btn btn-info mt-3"> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
