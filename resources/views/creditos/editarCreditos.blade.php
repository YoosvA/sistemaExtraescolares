@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4 class="text-center mt-4">Editar Creditos</h4>
        <div class="row">
            <div class="col">
                <form action="{{ route('updateCreditos', $items->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">

                            <label for="nombreAlumnosCreditos">Nombre del Alumno</label>
                            <select name="nombreAlumnosCreditos" id="nombreAlumnosCreditos" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $item)
                                    <option value="{{ $item->nombre }}" @if ($item->nombre == $items->nombreAlumnosCreditos) selected @endif>{{ $item->nombre }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoPaternoCreditos">Apellido Paterno</label>
                            <select name="apellidoPaternoCreditos" id="apellidoPaternoCreditos" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $item)
                                    <option value="{{ $item->apellidoPaterno }}" @if ($item->apellidoPaterno == $items->apellidoPaternoCreditos) selected @endif>{{ $item->apellidoPaterno }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoMaternoCreditos">Apellido Materno</label>
                            <select name="apellidoMaternoCreditos" id="apellidoMaternoCreditos" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $item)
                                    <option value="{{ $item->apellidoMaterno }}" @if ($item->apellidoMaterno == $items->apellidoMaternoCreditos) selected @endif>{{ $item->apellidoMaterno }}</option>
                                @endforeach
                            </select>

                            <label for="nombreCredito">Credito</label>
                            <select name="nombreCredito" id="nombreCredito" class="form-select" required>
                                <option value="" selected>Selecciona una opción</option>
                                @foreach ($creditosrol as $item)
                                    <option value="{{ $item->nameCredito }}" @if ($item->nameCredito == $items->nombreCredito) selected @endif>{{ $item->nameCredito }}</option>
                                @endforeach
                            </select>
                            <label for="mooc">Mooc</label>
                            <input type="file" name="mooc" id="mooc" class="form-control" value="{{ $items->mooc }}">
                            
                        </div>

                        <div class="col">
                            <label for="constancia">Constancia</label>
                            <input type="file" name="constancia" id="constancia" class="form-control" value="{{ $items->constancia }}">
                            <label for="oficioLiberacion">Oficio de Liberación</label>
                            <input type="file" name="oficioLiberacion" id="oficioLiberacion" class="form-control" value="{{ $items->oficioLiberacion }}">
                            <label for="evidencia">Evidencia</label>
                            <input type="file" name="evidencia" id="evidencia" class="form-control" value="{{ $items->evidencia }}">

                            <label for="carpeta">Carpeta Física</label>
                            <select name="carpeta" id="carpeta" class="form-select" required>
                                <option value="" selected>Selecciona una opción</option>
                                @foreach ($carpetas as $item)
                                    <option value="{{ $item->nombreCarpeta }}" @if ($item->nombreCarpeta == $items->carpeta) selected @endif>{{ $item->nombreCarpeta }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <button class="btn btn-warning mt-3"><i class="fas fa-save"></i>Actualizar</button>
                    <a href="/vistaCreditos" class="btn btn-info mt-3"><i class="fas fa-sign-out-alt"></i> Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection

