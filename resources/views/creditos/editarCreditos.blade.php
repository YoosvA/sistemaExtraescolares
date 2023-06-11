@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <br><br>
                <!--Contenido De Texto Arriba-->
                <!--Contenido Dentro De Un Card Principal Inicio-->
                <div class="card mt-4 border-0 shadow-lg bg-body rounded rounded-5">
                    <div class="card-body mt-4 mb-4 ms-4 mx-4">
                        <!--Texto Y Img En Card Inicio-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <br><br>
                                        <!---->
                                        <h1 class="text-center">Editar Créditos</h1>
                                        <h2 class="mt-2 mb-2 text-center">Instrucciones</h2>
                                        <h5 class="mt-3 text-center">Actualiza los datos y archivos del estudiante, además de que podrás 
                                            ingresar los archivos que faltan por medio de este formulario.</h5>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card ms-4 colorTransparente border-0">
                                    <div class="card-body ms-4">
                                        <!--Img Inicio-->
                                        <!----->
                                        <div
                                            class="card rounded-pill tamañoDeLogoVistaCretido ms-4 shadow-lg bg-body rounded border-0">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <br>
                                                    <img src="{{ asset('img/TecnmCircular.png') }}"
                                                        class="tamañoDeLogoVistaCretidoImg img-fluid "alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!----->
                                        <!--Img Fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Texto Y Img En Card Fin-->

                        <form action="{{ route('updateCreditos', $items->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!--Contenido De Input 3 Filas Inicio-->
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"> <i class="fas fa-user"></i> Nombre del Alumno</h4>
                                            <select name="nombreAlumnosCreditos" id="nombreAlumnosCreditos"
                                                class="form-select text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->nombre }}"
                                                        @if ($item->nombre == $items->nombreAlumnosCreditos) selected @endif>
                                                        {{ $item->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-print"></i> Crédito</h4>
                                            <select name="nombreCredito" id="nombreCredito"
                                                class="form-select text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opción</option>
                                                @foreach ($creditosrol as $item)
                                                    <option value="{{ $item->nameCredito }}"
                                                        @if ($item->nameCredito == $items->nombreCredito) selected @endif>
                                                        {{ $item->nameCredito }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-id-card-alt"></i> Oficio de
                                                Liberación</h4>
                                            <input type="file" name="oficioLiberacion" id="oficioLiberacion"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                value="{{ $items->oficioLiberacion }}">
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Paterno</h4>
                                            <select name="apellidoPaternoCreditos" id="apellidoPaternoCreditos"
                                                class="form-select text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoPaterno }}"
                                                        @if ($item->apellidoPaterno == $items->apellidoPaternoCreditos) selected @endif>
                                                        {{ $item->apellidoPaterno }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-paste"></i> Mooc</h4>
                                            <input type="file" name="mooc" id="mooc"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                value="{{ $items->mooc }}">
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-file-signature"></i> Evidencia
                                            </h4>
                                            <input type="file" name="evidencia" id="evidencia"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                value="{{ $items->evidencia }}">
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="text-center"><i class="fas fa-user"></i> Apellido Materno</h4>
                                            <select name="apellidoMaternoCreditos" id="apellidoMaternoCreditos"
                                                class="form-select text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoMaterno }}"
                                                        @if ($item->apellidoMaterno == $items->apellidoMaternoCreditos) selected @endif>
                                                        {{ $item->apellidoMaterno }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-id-card-alt"></i> Constancia</h4>
                                            <input type="file" name="constancia" id="constancia"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                value="{{ $items->constancia }}">
                                            <!---->
                                            <h4 class="mt-3 text-center"><i class="fas fa-folder-open"></i> Carpeta Física
                                            </h4>
                                            <select name="carpeta" id="carpeta"
                                                class="form-select text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                required>
                                                <option value="" selected>Selecciona una opción</option>
                                                @foreach ($carpetas as $item)
                                                    <option value="{{ $item->nombreCarpeta }}"
                                                        @if ($item->nombreCarpeta == $items->carpeta) selected @endif>
                                                        {{ $item->nombreCarpeta }}</option>
                                                @endforeach
                                            </select>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido De Input 3 Filas Fin-->





                            <!--Contenido De Botones Dentro De Un Card Inicio-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!--Contenido De Boton Inicio-->
                                            <div class="d-grid gap-2">
                                                <button class="btn guardarBoton mt-4 rounded-pill"><i
                                                        class="fas fa-save"></i> Actualizar</button>
                                            </div>
                                            <!--Contenido De Boton Fin-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card colorTransparente border-0">
                                        <div class="card-body">
                                            <!--Contenido De Boton Inicio-->
                                            <div class="d-grid gap-2">
                                                <a href="/vistaCreditos" class="btn RegresarBoton mt-4 rounded-pill"><i
                                                        class="fas fa-sign-out-alt"></i> Regresar</a>
                                            </div>
                                            <!--Contenido De Boton Fin-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido De Botones Dentro De Un Card Fin-->
                        </form>
                    </div>
                </div>
                <!--Contenido Dentro De Un Card Principal Fin-->
            </div>
        </div>
    </div>
@endsection
