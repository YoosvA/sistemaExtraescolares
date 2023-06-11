@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <!--Card Principal Inicio-->
                <div class="card border-0 shadow-lg  bg-body rounded-5 mt-4">
                    <div class="card-body">
                        <!--Contenido De Card Para Instrucciones Inicio-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <!---->
                                        <br><br><br><br><br>
                                        <h1 class="text-center"> <b>Agregar Datos Notas</b> </h1>
                                        <h2 class="mt-2 mb-2 text-center"> <b>Instrucciones</b> </h2>
                                        <h5 class="mt-2 text-center">Ingresa toda la información del alumno que se te pide por medio de este 
                                            formulario para generar el Ofició de Notas de participación.</h5>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card ms-4 colorTransparente border-0">
                                    <div class="card-body ms-4">
                                        <!---->
                                        <!--Card Donde Contiene Img Inicio-->
                                        <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0 ms-4">
                                            <div class="card-body">
                                                <!--Contenido De Img Inicio-->
                                                <div class="text-center">
                                                    <img src="{{ asset('img/TecnmCircular.png') }}"
                                                        class="tamañoDeImgRedesSociales rounded-circle img-fluid"
                                                        alt="">
                                                </div>
                                                <!--Contenido De Img Fin-->
                                            </div>
                                        </div>
                                        <!--Card Donde Contiene Img Inicio-->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Card Para Instrucciones Fin-->
                        <!---->
                        <!--Contenido Dentro De Un Form-->
                        <form action="/storeNotas" method="post">
                            @csrf
                            @method('POST')
                            <!--Contenido De Input En 3 Secciones Inicio-->
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Nombre del Alumno</h4>
                                            <select name="nombreAlumnoNotas" id="nombreAlumnoNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $datos)
                                                    <option value="{{ $datos->nombre }}">{{ $datos->nombre }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-sort-amount-down"></i> Numero de Control
                                            </h4>
                                            <select name="noControlNotas" id="noControlNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $datos)
                                                    <option value="{{ $datos->noControl }}">{{ $datos->noControl }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-user-clock"></i> Horas de
                                                Participación</h4>
                                            <input type="number" name="horas" id="horas"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                placeholder="Horas de Participación" aria-label="Horas de Participación"
                                                required min="5" max="20" step="5">
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-user-tie"></i> Grupo</h4>
                                            <input type="text" name="grupo" id="grupo"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                placeholder="Grupo" aria-label="Grupo" required>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Paterno</h4>
                                            <select name="apellidoPaternoNotas" id="apellidoPaternoNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $datos)
                                                    <option value="{{ $datos->apellidoPaterno }}">
                                                        {{ $datos->apellidoPaterno }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-balance-scale-left"></i> Carrera
                                            </h4>
                                            <select name="carreraNotas" id="carreraNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($carreras as $carrera)
                                                    <option value="{{ $carrera->nombre }}">{{ $carrera->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-user-clock"></i> Fecha de
                                                Participación</h4>
                                            <input type="date" name="fecha" id="fecha"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                            <!---->
                                            <!--Inico De Contenido Botones-->
                                            <br><br>
                                            <div class="d-grid gap-2">
                                                <button class="btn guardarBoton mt-3"><i class="fas fa-save"></i>
                                                    Guardar</button>
                                            </div>
                                            <!--Fin De Contenido Botones-->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Materno</h4>
                                            <select name="apellidoMaternoNotas" id="apellidoMaternoNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $datos)
                                                    <option value="{{ $datos->apellidoMaterno }}">
                                                        {{ $datos->apellidoMaterno }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-calendar-check"></i> Evento</h4>
                                            <select name="evento" id="evento"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($eventos as $evento)
                                                    <option value="{{ $evento->nombreEvento }}">
                                                        {{ $evento->nombreEvento }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-calendar-alt"></i> Periodo
                                                Escolar</h4>
                                            <input type="text" name="periodo" id="periodo"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                placeholder="Periodo Escolar" aria-label="Periodo Escolar" required>
                                            <!---->
                                            <!--Inico De Contenido Botones-->
                                            <br><br>
                                            <div class="d-grid gap-2">
                                                <a href="/vistaNotas" class="btn RegresarBoton mt-3"><i
                                                        class="fas fa-sign-out-alt"></i> Regresar</a>
                                            </div>
                                            <!--Fin De Contenido Botones-->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido De Input En 3 Secciones Fin-->

                        </form>
                        <!---->
                    </div>
                </div>
                <!--Card Principal Fin-->
            </div>
        </div>
    </div>
@endsection
