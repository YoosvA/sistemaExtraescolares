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
                            
                            <label for="nombreCredito">Credito</label>
                            <select name="nombreCredito" id="nombreCredito" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($creditosrol as $creditos)
                                    <option value="{{ $creditos->nameCredito }}">{{ $creditos->nameCredito }}</option>
                                @endforeach
                            </select>

                            {{-- <label for="nombreCredito">Credito</label>
                            <input type="text" name="nombreCredito" id="nombreCredito" class="form-control" required> --}}

                            <label for="mooc">Mooc</label>
                            <input type="file" name="mooc" id="mooc" class="form-control">
                            <label for="constancia">Constancia</label>
                            <input type="file" name="constancia" id="constancia" class="form-control">

                        </div>
                        <div class="col">
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

                    <button class="btn btn-primary mt-3"> Guardar</button>
                    <a href="/vistaCreditos" class="btn btn-info mt-3"> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
