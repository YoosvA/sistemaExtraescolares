@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4 class="text-center mt-4">Editar Creditos</h4>
        <div class="row">
            <div class="col">
                <form action="{{ route('updateCreditos', $items->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            
                            <label for="nombreCredito">Credito</label>
                            <select name="nombreCredito" id="nombreCredito" class="form-select"  value="{{ $items->nombreCredito }}" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($creditosrol as $item)
                                    <option value="{{ $item->nameCredito }}">{{ $item->nameCredito }}</option>
                                @endforeach
                            </select>

                            <label for="mooc">Mooc</label>
                            <input type="file" name="mooc" id="mooc" class="form-control" value="{{ $items->mooc }}">
                            <label for="constancia">Constancia</label>
                            <input type="file" name="constancia" id="constancia" class="form-control" value="{{ $items->constancia }}">

                        </div>
                        <div class="col">
                            <label for="oficioLiberacion">Oficio de Liberación</label>
                            <input type="file" name="oficioLiberacion" id="oficioLiberacion" class="form-control" value="{{ $items->oficioLiberacion }}">
                            <label for="evidencia">Evidencia</label>
                            <input type="file" name="evidencia" id="evidencia" class="form-control" value="{{ $items->evidencia }}">

                            <label for="carpeta">Carpeta Fisica</label>
                            <select name="carpeta" id="carpeta" class="form-select" value="{{ $items->carpeta }}" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($carpetas as $item)
                                    <option value="{{ $item->nombreCarpeta }}">{{ $item->nombreCarpeta }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="/vistaCreditos" class="btn btn-info mt-3">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection

