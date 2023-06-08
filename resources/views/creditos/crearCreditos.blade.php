@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Contenido Dentro De Container Inicio-->
                <br><br><br><br><br><br><br>
                <!--Contenido De Card Inicio Sombreada-->
                <div class="card shadow-lg bg-body rounded rounded-5 border-0">
                    <div class="card-body">
                        <!--Contenido De ImgLogo Inicio-->
                        <div
                            class="card position-absolute top-0 start-50 translate-middle rounded-circle shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <img src="{{ asset('img/TecnmCircular.png') }}"
                                    class="tamañoDeImgTecnmCircular img-fluid "alt="">
                            </div>
                        </div>
                        <!--Contenido De Img Fin-->
                        <!--Contenido De Texto Inicio-->
                        <br><br><br><br><br>
                        <h1 class="text-center mt-4">Agregar Creditos</h1>
                        <h2 class="ms-5">Instrucciones</h2>
                        <h5 class="ms-5">Ingresa todos los datos que se te piden...</h5>
                        <!--Contenido De Texto Fin-->
                        <!--Contenido Dentro De Card Inicio-->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <form action="/storeCreditos" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <!--Contenido De Input Inicio-->
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                            <div class="card border-0 colorTransparente">
                                                <div class="card-body">
                                                    <!--Inicio-->
                                                    <h4 class="ms-3"><i class="fas fa-user"></i> Nombre del Alumno</h4>
                                                    <select name="nombreAlumnosCreditos" id="nombreAlumnosCreditos"
                                                        class="form-select text-center shadow-sm  bg-body rounded-pill"
                                                        required>
                                                        <option value="" selected>Selecciona una opcion</option>
                                                        @foreach ($alumnosDatos as $datos)
                                                            <option value="{{ $datos->nombre }}">{{ $datos->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <!---->
                                                    <h4 class="mt-3 ms-3"><i class="fas fa-chalkboard-teacher"></i> Credito</h4>
                                                    <select name="nombreCredito" id="nombreCredito"
                                                        class="form-select text-center shadow-sm  bg-body rounded-pill"
                                                        required>
                                                        <option value="" selected>Selecciona una opcion</option>
                                                        @foreach ($creditosrol as $creditos)
                                                            <option value="{{ $creditos->nameCredito }}">
                                                                {{ $creditos->nameCredito }}</option>
                                                        @endforeach
                                                    </select>
                                                    <!---->
                                                    <h4 class="mt-3 ms-3"><i class="fas fa-print"></i> Oficio de Liberación</h4>
                                                    <input type="file" name="oficioLiberacion" id="oficioLiberacion"
                                                        class="form-control  text-center shadow-sm  bg-body rounded-pill">
                                                    <!---->
                                                    <!--Fin-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border-0 colorTransparente">
                                                <div class="card-body">
                                                    <!--Inicio-->
                                                    <h4 class="ms-3"><i class="fas fa-user"></i> Apellido Paterno</h4>
                                                    <select name="apellidoPaternoCreditos" id="apellidoPaternoCreditos"
                                                        class="form-select text-center shadow-sm  bg-body rounded-pill"
                                                        required>
                                                        <option value="" selected>Selecciona una opcion</option>
                                                        @foreach ($alumnosDatos as $datos)
                                                            <option value="{{ $datos->apellidoPaterno }}">
                                                                {{ $datos->apellidoPaterno }}</option>
                                                        @endforeach
                                                    </select>
                                                    <!---->
                                                    <h4 class="mt-3 ms-3"><i class="fas fa-id-card-alt"></i> Mooc</h4>
                                                    <input type="file" name="mooc" id="mooc"
                                                        class="form-control text-center shadow-sm  bg-body rounded-pill">
                                                    <!---->
                                                    <h4 class="mt-3 ms-3"><i class="fas fa-file-signature"></i> Evidencia</h4>
                                                    <input type="file" name="evidencia" id="evidencia"
                                                        class="form-control text-center shadow-sm  bg-body rounded-pill">
                                                    <!---->
                                                    <!--Fin-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border-0 colorTransparente">
                                                <div class="card-body">
                                                    <!--Inicio-->
                                                    <h4 class="ms-3"><i class="fas fa-user"></i> Apellido Materno</h4>
                                                    <select name="apellidoMaternoCreditos" id="apellidoMaternoCreditos"
                                                        class="form-select text-center shadow-sm  bg-body rounded-pill"
                                                        required>
                                                        <option value="" selected>Selecciona una opcion</option>
                                                        @foreach ($alumnosDatos as $datos)
                                                            <option value="{{ $datos->apellidoMaterno }}">
                                                                {{ $datos->apellidoMaterno }}</option>
                                                        @endforeach
                                                    </select>
                                                    <!---->
                                                    <h4 class="mt-3 ms-3"><i class="fas fa-id-card"></i> Constancia</h4>
                                                    <input type="file" name="constancia" id="constancia"
                                                        class="form-control text-center shadow-sm  bg-body rounded-pill">
                                                    <!---->
                                                    <h4 class="mt-3 ms-3"><i class="fas fa-folder-open"></i> Carpeta Fisica</h4>
                                                    <select name="carpeta" id="carpeta"
                                                        class="form-select text-center shadow-lg bg-body rounded-pill"
                                                        required>
                                                        <option value="" selected>Selecciona una opcion</option>
                                                        @foreach ($carpetas as $carpeta)
                                                            <option value="{{ $carpeta->nombreCarpeta }}">
                                                                {{ $carpeta->nombreCarpeta }}</option>
                                                        @endforeach
                                                    </select>
                                                    <!---->
                                                    <!--Fin-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Contenido De Input Fin-->

                                    <!--Seccion De Boton Inicio Estaran Dentro De Un Card-->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card border-0 colorTransparente">
                                                <div class="card-body">
                                                    <!--Contenido De Card Boton Inicio 1-->
                                                    <div class="d-grid gap-2">
                                                        <!--Contenido De Boton Inicio-->
                                                        <button class="btn guardarBoton text-white mt-3 rounded-pill">
                                                            <i class="fas fa-save"></i> Guardar</button>
                                                        <!--Contenido De Boton Fin-->
                                                    </div>
                                                    <!--Contenido De Card Boton Fin 1-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card border-0 colorTransparente">
                                                <div class="card-body">
                                                    <!--Contenido De Card Boton Inicio 2-->
                                                    <div class="d-grid gap-2">
                                                        <!--Contenido De Boton Inicio-->
                                                        <a href="/vistaCreditos"
                                                            class="btn RegresarBoton mt-3 rounded-pill"><i
                                                                class="fas fa-sign-out-alt"></i> regresar</a>
                                                        <!--Contenido De Boton Fin-->
                                                    </div>
                                                    <!--Contenido De Card Boton Fin 2-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Seccion De Boton Fin-->
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--Contenido Dentro De Card Fin-->
                </div>
            </div>
            <!--Contenido De Card Fin Sombreada-->
            <!--Contenido Dentro De Container Fin-->
        </div>
    </div>
    </div>
@endsection
