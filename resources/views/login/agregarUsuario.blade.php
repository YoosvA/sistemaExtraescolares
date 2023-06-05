@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Contenido De Informacion Que Esta Dentro De Un Card Inicio-->
                <div
                    class="card position-absolute top-50 start-50 translate-middle shadow-lg bg-body rounded rounded border-0 rounded-5">
                    <div class="card-body text-center">
                        <!--Contenido Donde Se Coloco Una Imagen Y Titulo Inicio-->
                        <img src="{{ asset('img/TecnmCircular.png') }}" class="tamañoDeImgTecnmCircular img-fluid"
                            alt="">
                        <h1 class="text-center mt-2">Agregar Usuario</h1>
                        <!--Contenido Donde Se Coloco Una Imagen Y Titulo Fin-->
                        <!--Contenido De Input Que Estan Dentro De Diferentes Card En Orden Inicio-->
                        <form action="/agregarNuevo" method="post" class="mt-3">
                            @csrf
                            @method('POST')
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h4>Nombre Completo</h4>
                                            <input type="text" class="form-control text-center rounded-pill mt-3 mb-3"
                                                name="name" id="name" required placeholder="Nombre Completo"
                                                aria-label="Nombre Completo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h4>Email</h4>
                                            <input type="email" class="form-control text-center rounded-pill mt-3 mb-3"
                                                name="email" id="email" required placeholder="Email"
                                                aria-label="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h4>Usuario</h4>
                                            <input type="text" class="form-control text-center rounded-pill mt-3 mb-3"
                                                name="user" id="user" required placeholder="Usuario"
                                                aria-label="Usuario">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h4>Contraseña</h4>
                                            <input type="password" class="form-control text-center rounded-pill mt-3 mb-3"
                                                name="password" id="password" required placeholder="Contraseña"
                                                aria-label="Contraseña">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button
                                            class="btn btn-primary rounded-pill mt-3 mx-5 text-white"><i class="fas fa-save"></i> Guardar</button>
                                            <a href="/" class="btn btn-success rounded-pill mt-3"><i class="fas fa-sign-out-alt"></i> regresar</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--Contenido De Input Que Estan Dentro De Diferentes Card En Orden Fin-->
                    </div>
                </div>
                <!--Contenido De Informacion Que Esta Dentro De Un Card Fin-->
            </div>
        </div>
    </div>
    @endsection
