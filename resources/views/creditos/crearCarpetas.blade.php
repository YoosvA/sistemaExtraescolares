@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Contenido Dentro De Container Inicio-->
                <h1 class="mt-3">Agregar Carpetas</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">Ingresa Todos Los Datos Que Se Te Piden</h5>
                <form action="/storeCarpetas" method="post">
                    @csrf
                    @method('POST')
                    <div class="card shadow-lg  bg-body rounded border-0 rounded-5">
                        <div class="card-body">
                            <!--Contenido Dentro De Un Card Inicio-->
                            <h4 class="mt-3">Nombre Carpeta</h4>
                            <input type="text" name="nombreCarpeta" id="nombreCarpeta" class="form-control rounded-pill text-center mt-4" placeholder="Nombre De Carpeta" aria-label="Nombre De Carpeta" required>
                            <!--Inpu Arriba-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <!---->
                                            <div class="d-grid gap-2">
                                                <button class="btn guardarBoton btn-primary mt-3"><i
                                                        class="fas fa-save"></i> Guardar</button>
                                            </div>
                                            <!---->

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <!---->
                                            <div class="d-grid gap-2">
                                                <a href="/vistaCreditos" class="btn RegresarBoton mt-3"><i
                                                        class="fas fa-sign-out-alt"></i> regresar</a>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                               <div class="text-center">
                                <img src="{{ asset('img/TecnmCircular.png') }}" class="TamañoDeImgCarpeta" alt="">
                               </div>
                            </div>
                            <!--Contenido Dentro De Un Card Fin-->
                        </div>
                    </div>
                </form>
                <!--Contenido Dentro De Container Fin-->
            </div>
        </div>
    </div>
@endsection
