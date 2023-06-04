@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h4 class="text-center mt-4">Agregar Carpetas</h4>
        <div class="row">
            <div class="col">
                <form action="/storeCarpetas" method="post">
                    @csrf
                    @method('POST')
                        <label for="nombreCarpeta">Nombre Carpeta</label>
                        <input type="text" name="nombreCarpeta" id="nombreCarpeta" class="form-control" required>
                    <button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Guardar</button>
                    <a href="/vistaCreditos" class="btn btn-info mt-3"><i class="fas fa-sign-out-alt"></i> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
