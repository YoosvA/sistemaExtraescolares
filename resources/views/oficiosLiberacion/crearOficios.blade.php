@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Contenido Dentro De Container Inicio-->
                <h1 class="mt-4">Agregar Datos Para Oficio de Liberación</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">Ingresa todos los datos que se te piden...</h5>
                <!--Contenido Dentro De Un Card Inicio-->
                <div class="card shadow-lg bg-body rounded-5 border-0">
                    <div class="card-body">
                        <form action="/storeOficios" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col mt-4 mb-4 ms-4 mx-4">

                                    <h4>Nombre del Alumno</h4>
                                    <select name="nombreEstudiante" id="nombreEstudiante"
                                        class="form-select rounded-pill text-center shadow-sm bg-body rounded" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->nombre }}">{{ $datos->nombre }}</option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Apellido Paterno</h4>
                                    <select name="apellidoPatEstudiante" id="apellidoPatEstudiante"
                                        class="form-select rounded-pill text-center shadow-sm bg-body rounded" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->apellidoPaterno }}">{{ $datos->apellidoPaterno }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Apellido Materno</h4>
                                    <select name="apellidoMatEstudiante" id="apellidoMatEstudiante"
                                        class="form-select rounded-pill text-center shadow-sm bg-body rounded" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->apellidoMaterno }}">{{ $datos->apellidoMaterno }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">No. Control</h4>
                                    <select name="noControlEstudiante" id="noControlEstudiante"
                                        class="form-select rounded-pill text-center shadow-sm bg-body rounded" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($alumnosDatos as $datos)
                                            <option value="{{ $datos->noControl }}">{{ $datos->noControl }}</option>
                                        @endforeach
                                    </select>



                                </div>
                                <div class="col mt-4 mb-4 ms-4 mx-4">

                                    <h4>Carrera</h4>
                                    <select name="carreraEstudiante" id="carreraEstudiante"
                                        class="form-select rounded-pill text-center shadow-sm bg-body rounded" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($carreras as $carrera)
                                            <option value="{{ $carrera->nombre }}">{{ $carrera->nombre }}</option>
                                        @endforeach
                                    </select>

                                    <h4 class="mt-3">Credito</h4>
                                    <select name="creditoEstudiante" id="creditoEstudiante"
                                        class="form-select rounded-pill text-center shadow-sm bg-body rounded" required>
                                        <option value="" selected>Selecciona una opcion</option>
                                        @foreach ($creditosrol as $creditos)
                                            <option value="{{ $creditos->nameCredito }}">{{ $creditos->nameCredito }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <h4 class="mt-3">Periodo Escolar</h4>
                                    <input type="text" name="periodoEstudiante" id="periodoEstudiante"
                                        class="form-control rounded-pill text-center shadow-sm bg-body rounded"
                                        placeholder="Periodo Escolar" aria-label="Periodo Escolar" required>
                                    <!--Contenido De Card Dentro Tiene 2 Botones Guardar y Regresar Inicio-->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <!--Contenido De Boton Guardar Inicio-->
                                                    <div class="d-grid gap-2">
                                                        <button class="btn guardarBoton mt-3"><i class="fas fa-save"></i>
                                                            Guardar</button>
                                                    </div>
                                                    <!--Contenido De Boton Guardar Fin-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <!--Contenido De Boton Regresar Inicio-->
                                                    <div class="d-grid gap-2">
                                                        <a href="/vistaOficios" class="btn RegresarBoton mt-3"><i
                                                                class="fas fa-sign-out-alt"></i> regresar</a>
                                                    </div>
                                                    <!--Contenido De Boton Regresar Fin-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Contenido De Card Dentro Tiene 2 Botones Guardar y Regresar Fin-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Contenido Dentro De Un Card Fin-->
                <!--Contenido Dentro De Container Fin-->
            </div>
        </div>
    </div>
@endsection
