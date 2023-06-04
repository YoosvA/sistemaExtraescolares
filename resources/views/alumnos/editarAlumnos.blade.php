@extends('layouts/main')

@section('contenido')
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Editar Datos Alumno </h1>
            <h2 class="ms-5">Instrucciones</h2>
            <h5 class="ms-5">Ingresa todos los datos que se te piden..</h5>
            <!--Contenido De Card Inicio-->
            <div class="card shadow-lg p-3 mb-5 bg-body rounded border-0 rounded-5 mt-4">
                <div class="card-body">
                    <!--Contenido De Adentro Card Inicio-->
                    <div class="row">
                        <div class="col mt-4 mb-4 ms-4 mx-4">
                            <form action="{{ route('update', $items->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col">
                                        <br><br>
                                        <img src="{{ asset('img/2gif.webp') }}" class="TamañoDe2gif img-fluid" alt="">
                                        
                                    </div>
                                    <div class="col">
                                        <h4>Nombre del Alumno</h4>
                                        <input type="text" name="nombre" id="nombre" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->nombre }}" required>
                                        <h4 class="mt-3">Apellido Paterno</h4>
                                        <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->apellidoPaterno }}" required>
                                        <h4 class="mt-3">Apellido Materno</h4>
                                        <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->apellidoMaterno }}" required>
                                        <h4 class="mt-3">Numero de Control</h4>
                                        <input type="text" name="noControl" id="noControl" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->noControl }}" required>
                                        <h4 class="mt-3">Numero de Celular</h4>
                                        <input type="text" name="telefono" id="telefono" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->telefono }}" required>
                                    </div>
                                    <div class="col">
                                        <h4>Carrera</h4>
                                        <select name="carrera" id="carrera" class="form-select rounded-pill text-center shadow-sm  bg-body" required>
                                            <option value="" selected>Selecciona una opción</option>
                                            @foreach ($carreras as $item)
                                                <option value="{{ $item->nombre }}" @if ($item->nombre == $items->carrera) selected @endif>{{ $item->nombre }}</option>
                                            @endforeach
                                        </select>
                                        
                                        <h4 class="mt-3">Fecha de Nacimiento</h4>
                                        <input type="date" name="fechaNac" id="fechaNac" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->fechaNac }}" required>
                                        <h4 class="mt-3">Escuela de Procedencia</h4>
                                        <input type="text" name="escuelaProcedencia" id="escuelaProcedencia" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->escuelaProcedencia }}" required>
                                        <h4 class="mt-3">Fecha de Ingreso al Tecnologico</h4>
                                        <input type="date" name="fechaIngreso" id="fechaIngreso" class="form-control rounded-pill text-center shadow-sm  bg-body"
                                            value="{{ $items->fechaIngreso }}" required>
                                        <!--Contenido De Botones Dentro De 2 Card Inicio-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                              <div class="card border-0">
                                                <div class="card-body">
                                                 <!--Primer Boton Inicio-->
                                                 <div class="d-grid gap-2">
                                                    <button class="btn colorDeBotonazul rounded-pill mt-3 text-white">Actualizar</button>
                                                  </div>
                                                 <!--Primer Boton Fin-->
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="card border-0">
                                                <div class="card-body">
                                                  <!--Segundo Boton Inicio-->
                                                  <div class="d-grid gap-2">
                                                    <a href="/vistaAlumnos" class="btn btn btn-danger rounded-pill mt-3">Regresar</a>
                                                  </div>
                                                 <!--Segundo Boton Fin-->
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        <!--Contenido De Botones Dentro De 2 Card Fin-->

                                    </div>
                                </div>
                                
                         
                            </form>
                        </div>
                    </div>
                    <!--Contenido De Adentro Card Fin-->
                </div>
            </div>
            <!--Contenido De Card Fin-->
        </div>
    </div>
</div>
@endsection

