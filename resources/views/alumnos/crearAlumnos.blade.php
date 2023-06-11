@extends('layouts/main')

@section('contenido')
    <!--Inicio De Container-->
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Inicio De Contenido-->
                <!--Inicio de Card-->
                <br><br><br><br><br><br>
                <div class="card mt-4 shadow-lg bg-body rounded border-0 rounded-5 mt-4 mb-4 ms-4 mx-4">
                    <!--Contenido De ImgLogo Inicio-->
                    <div
                        class="card position-absolute top-0 start-50 translate-middle rounded-circle shadow-lg bg-body rounded border-0">
                        <div class="card-body">
                            <img src="{{ asset('img/TecnmCircular.png') }}"
                                class="tamañoDeImgTecnmCircular img-fluid "alt="">
                        </div>
                    </div>
                    <!--Contenido De Img Fin-->
                    <!--Texto Inicio-->
                    <br><br><br><br><br>
                    <h1 class="mt-4 text-center">Agregar Datos Alumno</h1>
                    <h2 class="text-center mt-3">Instrucciones</h2>
                    <h5 class="text-center mt-3">Agrega los datos del estudiante que se te solicitan en el siguiente formulario.</h5>
                    <!--Texto Fin-->
                    <div class="card-body">
                        <!--Contenido Dentro De Card Inicio-->
                        <div class="row">
                            <div class="col ms-4 mx-4">
                                <form action="/store" method="post">
                                    @csrf
                                    @method('POST')
                                    <!--Contenido De 3 En Card Inicio-->
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <h4 class="text-center"><i class="fas fa-user"></i> Nombre Del Alumno
                                                    </h4>
                                                    <input type="text" name="nombre" id="nombre"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        required placeholder="Nombre Del Alumno"
                                                        aria-label="Nombre Del Alumno">
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-sort-amount-down"></i>
                                                        Numero De
                                                        Control
                                                    </h4>
                                                    <input type="text" name="noControl" id="noControl"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        required placeholder="Numero De Control"
                                                        aria-label="Numero De Control" pattern="[0-9]+" title="Ingrese solo números" maxlength="9">
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-calendar-week"></i> Fecha
                                                        de
                                                        Nacimiento
                                                    </h4>
                                                    <input type="date" name="fechaNac" id="fechaNac"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        required>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <h4 class="ms-3 text-center"><i class="fas fa-user"></i> Apellido
                                                        Paterno</h4>
                                                    <input type="text" name="apellidoPaterno" id="apellidoPaterno"
                                                        class="form-control rounded-pill text-center  shadow-sm  bg-body mt-3"
                                                        required placeholder="Apellido Paterno"
                                                        aria-label="Apellido Paterno">
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-phone-volume"></i> Numero
                                                        De
                                                        Celular</h4>
                                                    <input type="text" name="telefono" id="telefono"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        required placeholder="Numero De Celular"
                                                        aria-label="Numero De Celular" pattern="[0-9]+" title="Ingrese solo números" maxlength="10">
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-balance-scale-left"></i>
                                                        Escuela
                                                        De
                                                        Procedencia</h4>
                                                    <input type="text" name="escuelaProcedencia" id="escuelaProcedencia"
                                                        class="form-control text-center rounded-pill shadow-sm  bg-body mt-3"
                                                        required placeholder="Escuela De Procedencia"
                                                        aria-label="Escuela De Procedencia">
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <h4 class="text-center"><i class="fas fa-user"></i> Apellido Materno
                                                    </h4>
                                                    <input type="text" name="apellidoMaterno" id="apellidoMaterno"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        required placeholder="Apellido Materno"
                                                        aria-label="Apellido Materno">
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-user-tag"></i> Carrera
                                                    </h4>
                                                    <select name="carrera" id="carrera"
                                                        class="form-select rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        required>
                                                        <option value="" selected>Selecciona una opcion</option>
                                                        @foreach ($carreras as $carrera)
                                                            <option value="{{ $carrera->nombre }}">{{ $carrera->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-calendar-week"></i> Fecha
                                                        De
                                                        Ingreso Al
                                                        Tecnológico</h4>
                                                    <input type="date" name="fechaIngreso" id="fechaIngreso"
                                                        class="form-control text-center rounded-pill shadow-sm  bg-body mt-3"
                                                        required>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Contenido De 3 En Card Fin-->

                                    <!--Card Inicio De Botones-->
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <div class="d-grid gap-2">
                                                        <button class="btn guardarBoton rounded-pill text-white ">
                                                            <i class="fas fa-save"></i> Guardar</button>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <div class="d-grid gap-2">
                                                        <a href="/vistaAlumnos" class="btn RegresarBoton rounded-pill"><i
                                                                class="fas fa-sign-out-alt"></i> regresar</a>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Card Fin De Botones-->
                                </form>
                            </div>
                        </div>
                        <!--Contenido Dentro De Card Fin-->
                    </div>
                </div>
                <!--Fin de Card-->
                <!--Fin De Contenido-->
            </div>
        </div>
    </div>
    <!--Fin De Container-->
@endsection
