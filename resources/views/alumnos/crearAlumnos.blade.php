@extends('layouts/main')

@section('contenido')
    <!--Inicio De Container-->
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Inicio De Contenido-->
                <h1 class="mt-2">Agregar Datos Alumno</h1>
                <h2 class="ms-4">Instrucciones</h2>
                <h5>Ingresa todos los datos que se te piden</h5>
                <!--Inicio de Card-->
                <div class="card mt-4 shadow-lg bg-body rounded border-0 rounded-5">
                    <div class="text-center">
                        <img src="{{ asset('img/1gif.gif') }}" class="TamañoDe1gif img-fluid" alt="">
                    </div>
                    <div class="card-body">
                        <!--Contenido Dentro De Card Inicio-->
                        <div class="row">
                            <div class="col ms-4 mx-4">
                                <form action="/store" method="post">
                                    @csrf
                                    @method('POST')
                                 
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeNom.svg') }}" alt="">  Nombre Del Alumno</h4>
                                            <input type="text" name="nombre" id="nombre" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                required placeholder="Nombre Del Alumno" aria-label="Nombre Del Alumno">
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeNom.svg') }}" alt=""> Apellido Paterno</h4>
                                            <input type="text" name="apellidoPaterno" id="apellidoPaterno"
                                                class="form-control rounded-pill text-center  shadow-sm  bg-body" required placeholder="Apellido Paterno" aria-label="Apellido Paterno">
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeNom.svg') }}" alt=""> Apellido Materno</h4>
                                            <input type="text" name="apellidoMaterno" id="apellidoMaterno"
                                                class="form-control rounded-pill text-center shadow-sm  bg-body" required placeholder="Apellido Materno" aria-label="Apellido Materno">
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeNumDeCont.svg') }}" alt=""> Numero De Control</h4>
                                            <input type="text" name="noControl" id="noControl" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                required placeholder="Numero De Control" aria-label="Numero De Control">
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeCelular.svg') }}" alt=""> Numero De Celular</h4>
                                            <input type="text" name="telefono" id="telefono" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                required placeholder="Numero De Celular" aria-label="Numero De Celular">
                                        </div>
                                        <div class="col">
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeCarrera.svg') }}" alt=""> Carrera</h4>
                                            <select name="carrera" id="carrera" class="form-select rounded-pill text-center shadow-sm  bg-body" required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($carreras as $carrera)
                                                    <option value="{{ $carrera->nombre }}">{{ $carrera->nombre }}</option>
                                                @endforeach
                                            </select>
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeFechaDeNac.svg') }}" alt=""> Fecha de Nacimiento</h4>
                                            <input type="date" name="fechaNac" id="fechaNac" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                required>
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeEsc.svg') }}" alt="">  Escuela De Procedencia</h4>
                                            <input type="text" name="escuelaProcedencia" id="escuelaProcedencia"
                                                class="form-control text-center rounded-pill shadow-sm  bg-body" required placeholder="Escuela De Procedencia" aria-label="Escuela De Procedencia">
                                            <h4 class="mt-3"><img src="{{ asset('img/IconoDeNom.svg') }}" alt=""> Fecha De Ingreso Al Tecnologico</h4>
                                            <input type="date" name="fechaIngreso" id="fechaIngreso" class="form-control text-center rounded-pill shadow-sm  bg-body"
                                                required>
                                            <!--Card Inicio De Botones-->
                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <!---->
                                                            <div class="d-grid gap-2">
                                                                <button
                                                                    class="btn colorDeBotonazul rounded-pill mt-3 text-white ">
                                                                    <i class="fas fa-yin-yang"></i>    Guardar</button>
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
                                                                <a href="/vistaAlumnos"
                                                                    class="btn btn btn-danger rounded-pill mt-3"><i class="fas fa-sign-out-alt"></i> regresar</a>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Card Fin De Botones-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Contenido Dentro De Card Fin-->
                    </div>
                </div>
                <br><br><br>
                <!--Fin de Card-->
                <!--Fin De Contenido-->
            </div>
        </div>
    </div>
    <!--Fin De Container-->
@endsection
