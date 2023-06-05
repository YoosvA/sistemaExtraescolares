@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-4">Agregar Datos Notas</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">Ingresa todos los datos que se te piden...</h5>
                <!--Card Principal Inicio-->
                <div class="card border-0 shadow-lg  bg-body rounded-5 mt-4">
                    <div class="card-body">
                        <!---->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <form action="/storeNotas" method="post">
                                    @csrf
                                    @method('POST')
                                    <h4>Nombre del Alumno</h4>
                                    <select name="nombreAlumnoNotas" id="nombreAlumnoNotas"
                                        class="form-select text-center shadow-sm bg-body rounded rounded-pill" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->nombre }}">{{ $datos->nombre }}</option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Apellido Paterno</h4>
                                    <select name="apellidoPaternoNotas" id="apellidoPaternoNotas"
                                        class="form-select text-center shadow-sm bg-body rounded rounded-pill" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->apellidoPaterno }}">{{ $datos->apellidoPaterno }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Apellido Materno</h4>
                                    <select name="apellidoMaternoNotas" id="apellidoMaternoNotas"
                                        class="form-select text-center shadow-sm bg-body rounded rounded-pill" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->apellidoMaterno }}">{{ $datos->apellidoMaterno }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">No. Control</h4>
                                    <select name="noControlNotas" id="noControlNotas"
                                        class="form-select text-center shadow-sm bg-body rounded rounded-pill" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->noControl }}">{{ $datos->noControl }}</option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Evento</h4>
                                    <select name="evento" id="evento"
                                        class="form-select text-center shadow-sm bg-body rounded rounded-pill" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($eventos as $evento)
                                            <option value="{{ $evento->nombreEvento }}">{{ $evento->nombreEvento }}</option>
                                        @endforeach
                                    </select>

                            </div>
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <h4>Horas de Participación</h4>
                                <input type="number" name="horas" id="horas"
                                    class="form-control text-center shadow-sm bg-body rounded rounded-pill"
                                    placeholder="Horas de Participación" aria-label="Horas de Participación" required>


                                <h4 class="mt-3">Fecha de Participación</h4>
                                <input type="date" name="fecha" id="fecha"
                                    class="form-control text-center shadow-sm bg-body rounded rounded-pill" required>

                                <h4 class="mt-3">Periodo Escolar</h4>
                                <input type="text" name="periodo" id="periodo"
                                    class="form-control text-center shadow-sm bg-body rounded rounded-pill"
                                    placeholder="Periodo Escolar" aria-label="Periodo Escolar" required>

                                <h4 class="mt-3">Grupo</h4>
                                <input type="text" name="grupo" id="grupo"
                                    class="form-control text-center shadow-sm bg-body rounded rounded-pill"
                                    placeholder="Grupo" aria-label="Grupo" required>
                                <!--Seccion De Botones Inicio Son 2-->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <!--Inico De Contenido Botones-->
                                                <div class="d-grid gap-2">
                                                    <button class="btn guardarBoton mt-3"><i class="fas fa-save"></i>
                                                        Guardar</button>
                                                </div>
                                                <!--Fin De Contenido Botones-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <!--Inico De Contenido Botones-->
                                                <div class="d-grid gap-2">
                                                    <a href="/vistaNotas" class="btn RegresarBoton mt-3"><i
                                                            class="fas fa-sign-out-alt"></i>regresar</a>
                                                </div>
                                                <!--Fin De Contenido Botones-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Seccion De Botones Fin Son 2-->
                            </div>
                            </form>
                        </div>
                        <!---->
                    </div>
                </div>
                <!--Card Principal Fin-->
            </div>
        </div>
    </div>
@endsection
