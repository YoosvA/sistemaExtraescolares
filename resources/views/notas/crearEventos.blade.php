@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h4 class="text-center mt-4">Agregar Evento</h4>
        <div class="row">
            <div class="col">
                <form action="/storeEventos" method="post">
                    @csrf
                    @method('POST')
                        <label for="nombreEvento">Nombre del Evento</label>
                        <input type="text" name="nombreEvento" id="nombreEvento" class="form-control" required>
                    <button class="btn btn-primary mt-3"> Guardar</button>
                    <a href="/vistaNotas" class="btn btn-info mt-3"> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
