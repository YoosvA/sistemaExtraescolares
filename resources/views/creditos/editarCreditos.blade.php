@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1 class="mt-4">Editar Creditos</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">Ingresa todos los datos que se te piden... </h5>
                <!--Contenido De Texto Arriba-->
                    <!--Contenido Dentro De Un Card Principal Inicio-->
                        <div class="card mt-4 border-0 shadow-lg bg-body rounded rounded-5">
                            <div class="card-body mt-4 mb-4 ms-4 mx-4">
                                <form action="{{ route('updateCreditos', $items->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col">
                
                                            <h4>Nombre del Alumno</h4>
                                            <select name="nombreAlumnosCreditos" id="nombreAlumnosCreditos" class="form-select text-center rounded-pill shadow-sm bg-body rounded" required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->nombre }}" @if ($item->nombre == $items->nombreAlumnosCreditos) selected @endif>{{ $item->nombre }}</option>
                                                @endforeach
                                            </select>
                
                                            <h4 class="mt-3">Apellido Paterno</h4>
                                            <select name="apellidoPaternoCreditos" id="apellidoPaternoCreditos" class="form-select text-center rounded-pill shadow-sm bg-body rounded" required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoPaterno }}" @if ($item->apellidoPaterno == $items->apellidoPaternoCreditos) selected @endif>{{ $item->apellidoPaterno }}</option>
                                                @endforeach
                                            </select>
                
                                            <h4 class="mt-3">Apellido Materno</h4>
                                            <select name="apellidoMaternoCreditos" id="apellidoMaternoCreditos" class="form-select text-center rounded-pill shadow-sm bg-body rounded" required>
                                                <option value="" selected>Selecciona una opcion</option>
                                                @foreach ($alumnosDatos as $item)
                                                    <option value="{{ $item->apellidoMaterno }}" @if ($item->apellidoMaterno == $items->apellidoMaternoCreditos) selected @endif>{{ $item->apellidoMaterno }}</option>
                                                @endforeach
                                            </select>
                
                                            <h4 class="mt-3">Credito</h4>
                                            <select name="nombreCredito" id="nombreCredito" class="form-select text-center rounded-pill shadow-sm bg-body rounded" required>
                                                <option value="" selected>Selecciona una opción</option>
                                                @foreach ($creditosrol as $item)
                                                    <option value="{{ $item->nameCredito }}" @if ($item->nameCredito == $items->nombreCredito) selected @endif>{{ $item->nameCredito }}</option>
                                                @endforeach
                                            </select>
                                            <h4 class="mt-3">Mooc</h4>
                                            <input type="file" name="mooc" id="mooc" class="form-control text-center rounded-pill shadow-sm bg-body rounded" value="{{ $items->mooc }}">
                                            
                                        </div>
                
                                        <div class="col">
                                            <h4>Constancia</h4>
                                            <input type="file" name="constancia" id="constancia" class="form-control text-center rounded-pill shadow-sm bg-body rounded" value="{{ $items->constancia }}">
                                            <h4 class="mt-3">Oficio de Liberación</h4>
                                            <input type="file" name="oficioLiberacion" id="oficioLiberacion" class="form-control text-center rounded-pill shadow-sm bg-body rounded" value="{{ $items->oficioLiberacion }}">
                                            <h4 class="mt-3">Evidencia</h4>
                                            <input type="file" name="evidencia" id="evidencia" class="form-control text-center rounded-pill shadow-sm bg-body rounded" value="{{ $items->evidencia }}">
                
                                            <h4 class="mt-3">Carpeta Física</h4>
                                            <select name="carpeta" id="carpeta" class="form-select text-center rounded-pill shadow-sm bg-body rounded" required>
                                                <option value="" selected>Selecciona una opción</option>
                                                @foreach ($carpetas as $item)
                                                    <option value="{{ $item->nombreCarpeta }}" @if ($item->nombreCarpeta == $items->carpeta) selected @endif>{{ $item->nombreCarpeta }}</option>
                                                @endforeach
                                            </select>
                                            <!--Contenido De Botones Dentro De Un Card Inicio-->
                                    <div class="row">
                                        <div class="col-sm-6">
                                          <div class="card border-0">
                                            <div class="card-body">
                                                <!--Contenido De Boton Inicio-->
                                                <div class="d-grid gap-2">
                                                    <button class="btn guardarBoton mt-4 rounded-pill"><i class="fas fa-save"></i> Actualizar</button>
                                                  </div>
                                                <!--Contenido De Boton Fin-->
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="card border-0">
                                            <div class="card-body">
                                                <!--Contenido De Boton Inicio-->
                                                <div class="d-grid gap-2">
                                                    <a href="/vistaCreditos" class="btn RegresarBoton mt-4 rounded-pill"><i class="fas fa-sign-out-alt"></i> Regresar</a>
                                                </div>
                                              <!--Contenido De Boton Fin-->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <!--Contenido De Botones Dentro De Un Card Fin-->
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    <!--Contenido Dentro De Un Card Principal Fin-->
            </div>
        </div>
    </div>
@endsection

