@extends('layouts/main')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <!--Contenido Dentro De Container Inicio-->
<!--Contenido De Texto Inicio-->
            <h1 class="mt-4">Agregar Creditos</h1>
            <h2 class="ms-5">Instrucciones</h2>
            <h5 class="ms-5">Ingresa todos los datos que se te piden...</h5>
<!--Contenido De Texto Fin-->
            <!--Contenido De Card Inicio Sombreada-->
<div class="card shadow-lg bg-body rounded rounded-5 border-0">
    <div class="card-body">
<!--Contenido Dentro De Card Inicio-->
<div class="row">
    <div class="col mt-4 mb-4 ms-4 mx-4">
        <form action="/storeCreditos" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col">

                    <h4>Nombre del Alumno</h4>
                    <select name="nombreAlumnosCreditos" id="nombreAlumnosCreditos" class="form-select" required>
                        <option value="" selected>Selecciona una opcion</option>
                        @foreach ($alumnosDatos as $datos)
                            <option value="{{ $datos->nombre }}">{{ $datos->nombre }}</option>
                        @endforeach
                    </select>
                    
                    <h4 class="mt-3">Apellido Paterno</h4>
                    <select name="apellidoPaternoCreditos" id="apellidoPaternoCreditos" class="form-select" required>
                        <option value="" selected>Selecciona una opcion</option>
                        @foreach ($alumnosDatos as $datos)
                            <option value="{{ $datos->apellidoPaterno }}">{{ $datos->apellidoPaterno }}</option>
                        @endforeach
                    </select>

                    <h4 class="mt-3">Apellido Materno</h4>
                    <select name="apellidoMaternoCreditos" id="apellidoMaternoCreditos" class="form-select" required>
                        <option value="" selected>Selecciona una opcion</option>
                        @foreach ($alumnosDatos as $datos)
                            <option value="{{ $datos->apellidoMaterno }}">{{ $datos->apellidoMaterno }}</option>
                        @endforeach
                    </select>
                    
                    <h4 class="mt-3">Credito</h4>
                    <select name="nombreCredito" id="nombreCredito" class="form-select" required>
                        <option value="" selected>Selecciona una opcion</option>
                        @foreach ($creditosrol as $creditos)
                            <option value="{{ $creditos->nameCredito }}">{{ $creditos->nameCredito }}</option>
                        @endforeach
                    </select>

                    <h4 class="mt-3">Mooc</h4>
                    <input type="file" name="mooc" id="mooc" class="form-control">

                </div>
                <div class="col">
                    <h4>Constancia</h4>
                    <input type="file" name="constancia" id="constancia" class="form-control">
                    <h4 class="mt-3">Oficio de Liberación</h4>
                    <input type="file" name="oficioLiberacion" id="oficioLiberacion" class="form-control">
                    <h4 class="mt-3">Evidencia</h4>
                    <input type="file" name="evidencia" id="evidencia" class="form-control">

                    <h4 class="mt-3">Carpeta Fisica</h4>
                    <select name="carpeta" id="carpeta" class="form-select text-center shadow-lg bg-body rounded" required>
                        <option value="" selected>Selecciona una opcion</option>
                        @foreach ($carpetas as $carpeta)
                            <option value="{{ $carpeta->nombreCarpeta }}">{{ $carpeta->nombreCarpeta }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button class="btn btn-primary mt-3"> Guardar</button>
            <a href="/vistaCreditos" class="btn btn-info mt-3"> regresar</a>
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
