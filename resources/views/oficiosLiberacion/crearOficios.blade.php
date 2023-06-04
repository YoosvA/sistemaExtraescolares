@extends('layouts/main')

@section('contenido')
    <div class="container">
        <h4 class="text-center mt-4">Agregar Datos Para Oficio de Liberación</h4>
        <div class="row">
            <div class="col">
                <form action="/storeOficios" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col">

                            <label for="nombreEstudiante">Nombre del Alumno</label>
                            <select name="nombreEstudiante" id="nombreEstudiante" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->nombre }}">{{ $datos->nombre }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoPatEstudiante">Apellido Paterno</label>
                            <select name="apellidoPatEstudiante" id="apellidoPatEstudiante" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->apellidoPaterno }}">{{ $datos->apellidoPaterno }}</option>
                                @endforeach
                            </select>

                            <label for="apellidoMatEstudiante">Apellido Materno</label>
                            <select name="apellidoMatEstudiante" id="apellidoMatEstudiante" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->apellidoMaterno }}">{{ $datos->apellidoMaterno }}</option>
                                @endforeach
                            </select>

                            <label for="noControlEstudiante">No. Control</label>
                            <select name="noControlEstudiante" id="noControlEstudiante" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($alumnosDatos as $datos)
                                    <option value="{{ $datos->noControl }}">{{ $datos->noControl }}</option>
                                @endforeach
                            </select>



                        </div>
                        <div class="col">

                            <label for="carreraEstudiante">Carrera</label>
                            <select name="carreraEstudiante" id="carreraEstudiante" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->nombre }}">{{ $carrera->nombre }}</option>
                                @endforeach
                            </select>
                            
                            <label for="creditoEstudiante">Credito</label>
                            <select name="creditoEstudiante" id="creditoEstudiante" class="form-select" required>
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach ($creditosrol as $creditos)
                                    <option value="{{ $creditos->nameCredito }}">{{ $creditos->nameCredito }}</option>
                                @endforeach
                            </select>

                            
                            <label for="periodoEstudiante">Periodo Escolar</label>
                            <input type="text" name="periodoEstudiante" id="periodoEstudiante" class="form-control" required>

                        </div>
                    </div>

                    <button class="btn btn-primary mt-3"><i class="fas fa-save"></i> Guardar</button>
                    <a href="/vistaOficios" class="btn btn-info mt-3"><i class="fas fa-sign-out-alt"></i> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
