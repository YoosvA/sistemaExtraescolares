@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido Container Fin-->
                <br><br><br><br><br>
                <!--Contenid De Card Inicio-->
                <div class="card border-0 mt-4 rounded-5 shadow-lg bg-body rounded">
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
                        <br><br><br><br>
                        <h1 class="text-center mt-4">Editar Notas</h1>
                        <h2 class="mt-2 mb-2">Instrucciones</h2>
                        <h5>Ingresa todos los datos que se te piden... </h5>
                        <!--Contenido Texto Arriba Fin-->
                        <!---->
                        <form action="{{ route('updateNotas', $items->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <!--Contenido De Card Donde Son 3 Espacios Inicio-->
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Nombre del Alumno</h4>
                                            <select name="nombreAlumnoNotas" id="nombreAlumnoNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option
                                                        value="{{ $item->nombre }}"@if ($item->nombre == $items->nombreAlumnoNotas) selected @endif>
                                                        {{ $item->nombre }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-sort-amount-down"></i> No. Control</h4>
                                            <select name="noControlNotas" id="noControlNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->noControl }}"
                                                        @if ($item->noControl == $items->noControlNotas) selected @endif>
                                                        {{ $item->noControl }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-user-clock"></i> Horas de Participación</h4>
                                            <input type="number" name="horas" id="horas"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                value="{{ $items->horas }}" required min="5" max="20"
                                                step="5">
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-users"></i> Grupo</h4>
                                            <input type="text" name="grupo" id="grupo"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                value="{{ $items->grupo }}" placeholder="Grupo" aria-label="Grupo" required>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Paterno</h4>
                                            <select name="apellidoPaternoNotas" id="apellidoPaternoNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoPaterno }}"
                                                        @if ($item->apellidoPaterno == $items->apellidoPaternoNotas) selected @endif>
                                                        {{ $item->apellidoPaterno }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-balance-scale-left"></i> Carrera</h4>
                                            <select name="carreraNotas" id="carreraNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($carreras as $item)
                                                    <option value="{{ $item->nombre }}"
                                                        @if ($item->nombre == $items->carreraNotas) selected @endif>
                                                        {{ $item->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-calendar-check"></i> Fecha de Participación</h4>
                                            <input type="date" name="fecha" id="fecha"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                value="{{ $items->fecha }}" required>
                                            <!---->
                                            <br><br>
                                            <!--Contenido De Boton Inicio-->
                                            <div class="d-grid gap-2">
                                                <button class="btn guardarBoton mt-3 rounded-pill"><i
                                                        class="fas fa-save"></i>
                                                    Actualizar</button>
                                            </div>
                                            <!--Contenido De Boton Fin-->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Materno</h4>
                                            <select name="apellidoMaternoNotas" id="apellidoMaternoNotas"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoMaterno }}"
                                                        @if ($item->apellidoMaterno == $items->apellidoMaternoNotas) selected @endif>
                                                        {{ $item->apellidoMaterno }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-calendar-check"></i> Evento</h4>
                                            <select name="evento" id="evento"
                                                class="form-select text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($eventos as $item)
                                                    <option value="{{ $item->nombreEvento }}"
                                                        @if ($item->nombreEvento == $items->evento) selected @endif>
                                                        {{ $item->nombreEvento }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-calendar-alt"></i> Periodo Escolar</h4>
                                            <input type="text" name="periodo" id="periodo"
                                                class="form-control text-center shadow-sm bg-body rounded rounded-pill mt-3"
                                                value="{{ $items->periodo }}" required>
                                            <!---->
                                            <!--Contenido De Boton Inicio-->
                                            <br><br>
                                            <div class="d-grid gap-2">
                                                <a href="/vistaNotas" class="btn RegresarBoton mt-3 rounded-pill"><i
                                                        class="fas fa-sign-out-alt"></i> Regresar</a>
                                            </div>
                                            <!--Contenido De Boton Fin-->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido De Card Donde Son 3 Espacios Fin-->
                        </form>
                        <!---->
                    </div>
                </div>
                <!--Contenido De Card Fin-->
                <!--Contenido Container Fin-->
            </div>
        </div>
    </div>
@endsection
