@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <br><br><br><br>
                <!--Contenido De Card Inicio-->
                <div class="card shadow-lg p-3 mb-5 bg-body rounded border-0 rounded-5 mt-4">
                    <div class="card-body mt-4 mb-4 ms-4 mx-4">
                        <!--Contenido De ImgLogo Inicio-->
                        <div
                            class="card position-absolute top-0 start-50 translate-middle rounded-circle shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <img src="{{ asset('img/TecnmCircular.png') }}"
                                    class="tamañoDeImgTecnmCircular img-fluid "alt="">
                            </div>
                        </div>
                        <!--Contenido De Img Fin-->
                        <!--Contenido Texto-->
                        <br><br><br><br>
                        <h1 class="text-center">Editar Datos Alumno </h1>
                        <h2>Instrucciones</h2>
                        <h5>Ingresa todos los datos que se te piden..</h5>
                        <!--Contenido De Adentro Card Inicio-->
                        <div class="row">
                            <div class="col ms-4 mx-4">
                                <form action="{{ route('update', $items->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <!--Contenido Card Donde Tiene 3 Informacion Inicio-->
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <h4 class="text-center"><i class="fas fa-user"></i> Nombre del Alumno
                                                    </h4>
                                                    <input type="text" name="nombre" id="nombre"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->nombre }}" required>
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-user"></i> Apellido
                                                        Paterno
                                                    </h4>
                                                    <input type="text" name="apellidoPaterno" id="apellidoPaterno"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->apellidoPaterno }}" required>
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-user"></i> Apellido
                                                        Materno
                                                    </h4>
                                                    <input type="text" name="apellidoMaterno" id="apellidoMaterno"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->apellidoMaterno }}" required>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <h4 class="text-center"><i class="fas fa-sort-amount-down"></i>
                                                        Numero de Control</h4>
                                                    <input type="text" name="noControl" id="noControl"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->noControl }}" required>
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-phone"></i> Numero de
                                                        Celular</h4>
                                                    <input type="text" name="telefono" id="telefono"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->telefono }}" required>
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-balance-scale-left"></i>
                                                        Carrera</h4>
                                                    <select name="carrera" id="carrera"
                                                        class="form-select rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        required>
                                                        <option value="" selected>Selecciona una opción</option>
                                                        @foreach ($carreras as $item)
                                                            <option value="{{ $item->nombre }}"
                                                                @if ($item->nombre == $items->carrera) selected @endif>
                                                                {{ $item->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!---->
                                                    <h4 class="text-center"><i class="fas fa-calendar-alt"></i>
                                                        Fecha
                                                        de Nacimiento</h4>
                                                    <input type="date" name="fechaNac" id="fechaNac"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->fechaNac }}" required>
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-balance-scale-left"></i>
                                                        Escuela de Procedencia</h4>
                                                    <input type="text" name="escuelaProcedencia" id="escuelaProcedencia"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->escuelaProcedencia }}" required>
                                                    <!---->
                                                    <h4 class="text-center mt-3"><i class="fas fa-calendar-alt"></i>
                                                        Fecha
                                                        de Ingreso al Tecnologico</h4>
                                                    <input type="date" name="fechaIngreso" id="fechaIngreso"
                                                        class="form-control rounded-pill text-center shadow-sm  bg-body mt-3"
                                                        value="{{ $items->fechaIngreso }}" required>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Contenido Card Donde Tiene 3 Informacion Fin-->

                                    <!--Contenido De Botones Dentro De 2 Card Inicio-->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!--Primer Boton Inicio-->
                                                    <div class="d-grid gap-2">
                                                        <button class="btn guardarBoton rounded-pill text-white"><i
                                                                class="fas fa-save"></i> Actualizar</button>
                                                    </div>
                                                    <!--Primer Boton Fin-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card colorTransparente border-0">
                                                <div class="card-body">
                                                    <!--Segundo Boton Inicio-->
                                                    <div class="d-grid gap-2">
                                                        <a href="/vistaAlumnos" class="btn RegresarBoton rounded-pill"><i
                                                                class="fas fa-sign-out-alt"></i> Regresar</a>
                                                    </div>
                                                    <!--Segundo Boton Fin-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Contenido De Botones Dentro De 2 Card Fin-->
                                </form>
                            </div>
                        </div>
                        <!--Contenido De Adentro Card Fin-->
                    </div>
                </div>
                <!--Contenido De Card Fin-->
            </div>
        </div>
    </div>
@endsection
