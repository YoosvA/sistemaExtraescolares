@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h4 class="text-center mt-4">Editar Datos Alumno </h4>
        <div class="row">
            <div class="col">
                <form action="{{ route('update', $items->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="nombre">Nombre del Alumno</label>
                            <input type="text" name="nombre" id="nombre" class="form-control"
                                value="{{ $items->nombre }}" required>
                            <label for="apellidoPaterno">Apellido Paterno</label>
                            <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control"
                                value="{{ $items->apellidoPaterno }}" required>
                            <label for="apellidoMaterno">Apellido Materno</label>
                            <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control"
                                value="{{ $items->apellidoMaterno }}" required>
                            <label for="noControl">Numero de Control</label>
                            <input type="text" name="noControl" id="noControl" class="form-control"
                                value="{{ $items->noControl }}" required>
                            <label for="telefono">Numero de Celular</label>
                            <input type="text" name="telefono" id="telefono" class="form-control"
                                value="{{ $items->telefono }}" required>
                        </div>
                        <div class="col">
                            <label for="carrera">Carrera</label>
                            <select name="carrera" id="carrera" class="form-select" value="{{ $items->carrera }}"required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($carreras as $item)
                                    <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="fechaNac">Fecha de Nacimiento</label>
                            <input type="date" name="fechaNac" id="fechaNac" class="form-control"
                                value="{{ $items->fechaNac }}" required>
                            <label for="escuelaProcedencia">Escuela de Procedencia</label>
                            <input type="text" name="escuelaProcedencia" id="escuelaProcedencia" class="form-control"
                                value="{{ $items->escuelaProcedencia }}" required>
                            <label for="fechafechaIngresoNac">Fecha de Ingreso al Tecnologico</label>
                            <input type="date" name="fechaIngreso" id="fechaIngreso" class="form-control"
                                value="{{ $items->fechaIngreso }}" required>
                        </div>
                    </div>
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="/vistaAlumnos" class="btn btn-info mt-3">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection

