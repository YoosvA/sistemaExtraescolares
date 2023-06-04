
@extends('layouts/main')

@section('contenido')
<div class="container mt-4">
    <h4 class="text-center mt-4">Editar Datos Oficios</h4>
    <div class="row">
        <div class="col">
            <form action="{{ route('updateOficios', $items->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col">

                        <label for="nombreEstudiante">Nombre del Alumno</label>
                        <select name="nombreEstudiante" id="nombreEstudiante" class="form-select" required>
                            <option value="" selected>Selecciona una opcion</option>
                            @foreach ($alumnosDatos as $item)
                                <option value="{{ $item->nombre }}"@if ($item->nombre == $items->nombreEstudiante) selected @endif>{{ $item->nombre }}</option>
                            @endforeach
                        </select>

                        <label for="apellidoPatEstudiante">Apellido Paterno</label>
                        <select name="apellidoPatEstudiante" id="apellidoPatEstudiante" class="form-select" required>
                            <option value="" selected>Selecciona una opcion</option>
                            @foreach ($alumnosDatos as $item)
                                <option value="{{ $item->apellidoPaterno }}" @if ($item->apellidoPaterno == $items->apellidoPatEstudiante) selected @endif>{{ $item->apellidoPaterno }}</option>
                            @endforeach
                        </select>

                        <label for="apellidoMatEstudiante">Apellido Materno</label>
                        <select name="apellidoMatEstudiante" id="apellidoMatEstudiante" class="form-select" required>
                            <option value="" selected>Selecciona una opcion</option>
                            @foreach ($alumnosDatos as $item)
                                <option value="{{ $item->apellidoMaterno }}" @if ($item->apellidoMaterno == $items->apellidoMatEstudiante) selected @endif>{{ $item->apellidoMaterno }}</option>
                            @endforeach
                        </select>

                        <label for="noControlEstudiante">No. Control</label>
                        <select name="noControlEstudiante" id="noControlEstudiante" class="form-select" required>
                            <option value="" selected>Selecciona una opcion</option>
                            @foreach ($alumnosDatos as $item)
                                <option value="{{ $item->noControl }}" @if ($item->noControl == $items->noControlEstudiante) selected @endif>{{ $item->noControl }}</option>
                            @endforeach
                        </select>

                        <label for="carreraEstudiante">Carrera</label>
                        <select name="carreraEstudiante" id="carreraEstudiante" class="form-select" required>
                            <option value="" selected>Selecciona una opcion</option>
                            @foreach ($carreras as $item)
                                <option value="{{ $item->nombre }}" @if ($item->nombre == $items->carreraEstudiante) selected @endif>{{ $item->nombre }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col">
                        
                        <label for="creditoEstudiante">Credito</label>
                        <select name="creditoEstudiante" id="creditoEstudiante" class="form-select" required>
                            <option value="" selected>Selecciona una opción</option>
                            @foreach ($creditosrol as $item)
                                <option value="{{ $item->nameCredito }}" @if ($item->nameCredito == $items->creditoEstudiante) selected @endif>{{ $item->nameCredito }}</option>
                            @endforeach
                        </select>

                        <label for="periodoEstudiante">Periodo Escolar</label>
                        <input type="text" name="periodoEstudiante" id="periodoEstudiante" class="form-control" value="{{ $items->periodoEstudiante }}" required>

                        
                    </div>
                </div>
                
                <button class="btn btn-warning mt-3"><i class="fas fa-save"></i> Actualizar</button>
                <a href="/vistaOficios" class="btn btn-info mt-3"><i class="fas fa-sign-out-alt"></i> Regresar</a>
            </form>
        </div>
    </div>
</div>
@endsection

