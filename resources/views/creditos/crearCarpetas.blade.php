@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Contenido Dentro De Container Inicio-->
                <form action="/storeCarpetas" method="post">
                    @csrf
                    @method('POST')
                    <br><br><br><br>
                    <div
                        class="card shadow-lg  bg-body rounded border-0 rounded-5 position-absolute top-50 start-50 translate-middle">
                        <div class="card-body">
                            <!--Contenido Texto Inicio-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <br><br><br>
                                            <h1 class="text-center">Agregar Carpetas</h1>
                                            <h2 class="text-center">Instrucciones</h2>
                                            <h5 class="text-center">Ingresa el nombre de la carpeta física que deseas agregar.</h5>
                                            <!--Contenido Dentro De Un Card Inicio-->
                                            <h4 class="text-center"><i class="fas fa-file-signature"></i> Nombre Carpeta
                                            </h4>
                                            <input type="text" name="nombreCarpeta" id="nombreCarpeta"
                                                class="form-control rounded-pill text-center mt-3"
                                                placeholder="Nombre De Carpeta" aria-label="Nombre De Carpeta" required>
                                            <!--Inpu Arriba-->
                                            <div class="row mt-2">
                                                <div class="col-sm-6">
                                                    <div class="card border-0 colorTransparente">
                                                        <div class="card-body">
                                                            <!---->
                                                            <div class="d-grid gap-2">
                                                                <button class="btn guardarBoton"><i class="fas fa-save"></i>
                                                                    Guardar</button>
                                                            </div>
                                                            <!---->

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card border-0 colorTransparente">
                                                        <div class="card-body">
                                                            <!---->
                                                            <div class="d-grid gap-2">
                                                                <a href="/vistaCreditos" class="btn RegresarBoton"><i
                                                                        class="fas fa-sign-out-alt"></i> regresar</a>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Contenido Dentro De Un Card Fin-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('img/CarpetaImg.jpg') }}" class="CarpetaImgVista"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido Texto Fin-->

                        </div>
                    </div>
                </form>
                <!--Contenido Dentro De Container Fin-->
            </div>
        </div>
    </div>
@endsection
