@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h4 class="text-center mt-4">Agregar Datos Alumno</h4>
        <div class="row">
            <div class="col">
                <form action="/store" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col">
                            <label for="nombre">Nombre del Alumno</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                            <label for="apellidoPaterno">Apellido Paterno</label>
                            <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" required>
                            <label for="apellidoMaterno">Apellido Materno</label>
                            <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" required>
                            <label for="noControl">Numero de Control</label>
                            <input type="text" name="noControl" id="noControl" class="form-control" required>
                            <label for="telefono">Numero de Celular</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="carrera">Carrera</label>
                            <select name="carrera" id="carrera" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->nombre }}">{{ $carrera->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="fechaNac">Fecha de Nacimiento</label>
                            <input type="date" name="fechaNac" id="fechaNac" class="form-control" required>
                            <label for="escuelaProcedencia">Escuela de Procedencia</label>
                            <input type="text" name="escuelaProcedencia" id="escuelaProcedencia" class="form-control"
                                required>
                            <label for="fechafechaIngresoNac">Fecha de Ingreso al Tecnologico</label>
                            <input type="date" name="fechaIngreso" id="fechaIngreso" class="form-control" required>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-3"> Guardar</button>
                    <a href="/vistaAlumnos" class="btn btn-info mt-3"> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
