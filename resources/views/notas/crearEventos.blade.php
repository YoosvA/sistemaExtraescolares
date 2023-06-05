@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-4">Agregar Evento</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">Ingresa todos los datos que se te piden</h5>
                <!--Contenido De Texto Informacion-->
                <!--Contenido Card Principal Inicio-->
                <div class="card rounded-5 shadow-lg bg-body rounded border-0 mt-4">
                    <div class="card-body">
                        <!--Contenido Card Informacion Inicio-->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <form action="/storeEventos" method="post">
                                    @csrf
                                    @method('POST')
                                    <h4>Nombre del Evento</h4>
                                    <input type="text" name="nombreEvento" id="nombreEvento" class="form-control text-center rounded-pill shadow-sm  bg-body rounded"  placeholder="Nombre Del Evento" aria-label="Nombre Del Evento" required>
                                    <!--Contenido Card 2 Botones Inicio-->
                                    <div class="row">
                                        <div class="col-sm-6">
                                          <div class="card border-0">
                                            <div class="card-body">
                                                <!--Contenido De Botones Inicio-->
                                                <div class="d-grid gap-2">
                                                    <button class="btn guardarBoton mt-3 rounded-pill"><i class="fas fa-save"></i> Guardar</button>
                                                  </div>
                                                <!--Contenido De Botones Fin-->
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <div class="card border-0">
                                            <div class="card-body">
                                                <!--Contenido De Botones Inicio-->
                                                <div class="d-grid gap-2">
                                                    <a href="/vistaNotas" class="btn RegresarBoton mt-3 rounded-pill"><i class="fas fa-sign-out-alt"></i> regresar</a>
                                                  </div>
                                                <!--Contenido De Botones Fin-->
                                            </div>
                                          </div>
                                        </div>
                                        <div class="text-center">
                                          <img src="{{ asset('img/TecnmCircular.png') }}" class="TamañoDeImgCarpeta" alt="">
                                         </div>
                                      </div>
                                    <!--Contenido Card 2 Botones Fin-->           
                                </form>
                            </div>
                        </div>
                        <!--Contenido Card Informacion Fin-->
                    </div>
                </div>
                <!--Contenido Card Principal Fin-->
            </div>
        </div>
    </div>
@endsection
