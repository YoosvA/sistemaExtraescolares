@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h4 class="text-center mt-4">Agregar Creditos</h4>
        <div class="row">
            <div class="col">
                <form action="/storeCreditos" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col">

                            <label for="nombreAlumnosCreditos">Nombre del Alumno</label>
                            <select name="nombreAlumnosCreditos" id="nombreAlumnosCreditos" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->nombre }}">{{ $datos->nombre }}</option>
                                @endforeach
                            </select>
                            
                            <label for="apellidoPaternoCreditos">Apellido Paterno</label>
                            <select name="apellidoPaternoCreditos" id="apellidoPaternoCreditos" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->apellidoPaterno }}">{{ $datos->apellidoPaterno }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoMaternoCreditos">Apellido Materno</label>
                            <select name="apellidoMaternoCreditos" id="apellidoMaternoCreditos" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->apellidoMaterno }}">{{ $datos->apellidoMaterno }}</option>
                                @endforeach
                            </select>
                            
                            <label for="nombreCredito">Credito</label>
                            <select name="nombreCredito" id="nombreCredito" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($creditosrol as $creditos)
                                    <option value="{{ $creditos->nameCredito }}">{{ $creditos->nameCredito }}</option>
                                @endforeach
                            </select>

                            <label for="mooc">Mooc</label>
                            <input type="file" name="mooc" id="mooc" class="form-control">

                        </div>
                        <div class="col">
                            <label for="constancia">Constancia</label>
                            <input type="file" name="constancia" id="constancia" class="form-control">
                            <label for="oficioLiberacion">Oficio de Liberación</label>
                            <input type="file" name="oficioLiberacion" id="oficioLiberacion" class="form-control">
                            <label for="evidencia">Evidencia</label>
                            <input type="file" name="evidencia" id="evidencia" class="form-control">

                            <label for="carpeta">Carpeta Fisica</label>
                            <select name="carpeta" id="carpeta" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($carpetas as $carpeta)
                                    <option value="{{ $carpeta->nombreCarpeta }}">{{ $carpeta->nombreCarpeta }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Guardar</button>
                    <a href="/vistaCreditos" class="btn btn-info mt-3"><i class="fas fa-sign-out-alt"></i> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
