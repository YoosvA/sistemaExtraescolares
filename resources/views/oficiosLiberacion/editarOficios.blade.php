@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <!--Contenido Dentro Del Container Inicio-->
                <!--Texto Arriba Instrucciones-->
                <div class="card shadow-lg bg-body rounded rounded-5 border-0 mt-4">
                    <div class="card-body">
                        <!--Contenido De Texto Inicio Dentro De Un Card-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <!---->
                                        <br><br><br>
                                        <h1 class="mt-4 text-center">Editar Datos Oficios</h1>
                                        <h2 class="ms-5 text-center">Instrucciones</h2>
                                        <h5 class="ms-5 text-center">Ingresa todos los datos que se te piden..</h5>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card ms-4 colorTransparente border-0">
                                    <div class="card-body ms-4">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Texto Fin  Dentro De Un Card-->

                        <!--Contenido Dentro De Card Inicio-->
                        <form action="{{ route('updateOficios', $items->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <!--Contenido De Input Dentro De Una Card Inicio-->
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Nombre del Alumno</h4>
                                            <select name="nombreEstudiante" id="nombreEstudiante"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opción</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->nombre }}"
                                                        @if ($item->nombre == $items->nombreEstudiante) selected @endif>
                                                        {{ $item->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="text-center mt-3"><i class="fas fa-sort-amount-down"></i> No. Control</h4>
                                            <select name="noControlEstudiante" id="noControlEstudiante"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->noControl }}"
                                                        @if ($item->noControl == $items->noControlEstudiante) selected @endif>
                                                        {{ $item->noControl }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="text-center mt-3"><i class="fas fa-calendar-check"></i> Periodo Escolar</h4>
                                            <input type="text" name="periodoEstudiante" id="periodoEstudiante"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                value="{{ $items->periodoEstudiante }}" required>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Paterno</h4>
                                            <select name="apellidoPatEstudiante" id="apellidoPatEstudiante"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoPaterno }}"
                                                        @if ($item->apellidoPaterno == $items->apellidoPatEstudiante) selected @endif>
                                                        {{ $item->apellidoPaterno }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="text-center mt-3"><i class="fas fa-balance-scale-left"></i> Carrera</h4>
                                            <select name="carreraEstudiante" id="carreraEstudiante"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($carreras as $item)
                                                    <option value="{{ $item->nombre }}"
                                                        @if ($item->nombre == $items->carreraEstudiante) selected @endif>
                                                        {{ $item->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <!--Contenido De Boton Inicio Actualizar-->
                                            <br><br>
                                            <div class="d-grid gap-2">
                                                <button class="btn guardarBoton mt-3"><i class="fas fa-save"></i>
                                                    Actualizar</button>
                                            </div>

                                            <!--Contenido De Boton Fin Actualizar-->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Materno</h4>
                                            <select name="apellidoMatEstudiante" id="apellidoMatEstudiante"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoMaterno }}"
                                                        @if ($item->apellidoMaterno == $items->apellidoMatEstudiante) selected @endif>
                                                        {{ $item->apellidoMaterno }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="text-center mt-3"><i class="fas fa-id-card-alt"></i> Credito</h4>
                                            <select name="creditoEstudiante" id="creditoEstudiante"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opción</option>
                                                @foreach ($creditosrol as $item)
                                                    <option value="{{ $item->nameCredito }}"
                                                        @if ($item->nameCredito == $items->creditoEstudiante) selected @endif>
                                                        {{ $item->nameCredito }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <!--Contenido De Boton Inicio Regresar-->
                                            <br><br>
                                            <div class="d-grid gap-2">
                                                <a href="/vistaOficios" class="btn RegresarBoton mt-3"><i
                                                        class="fas fa-sign-out-alt"></i> Regresar</a>
                                            </div>

                                            <!--Contenido De Boton Fin Regresar-->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido De Input Dentro De Una Card Fin-->
                        </form>
                        <!--Contenido Dentro De Card Fin-->
                    </div>
                </div>
                <!--Contenido Dentro Del Conatiner Fin-->
            </div>
        </div>
    </div>
@endsection
