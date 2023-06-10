@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Contenido De Informacion Que Esta Dentro De Un Card Inicio-->
                <br><br><br><br><br><br><br><br>
                <div class="card shadow-lg bg-body rounded rounded border-0 rounded-5 mt-4">
                    <div class="card-body">
                        <!--Contenido Donde Se Coloco Una Imagen Y Titulo Inicio-->
                        <div
                            class="card position-absolute top-0 start-50 translate-middle rounded-circle shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <img src="{{ asset('img/TecnmCircular.png') }}"
                                    class="tamañoDeImgTecnmCircular img-fluid "alt="">
                            </div>
                        </div>
                        <br><br><br><br><br>
                        <h1 class="text-center mt-4">Agregar Usuario</h1>
                        <!--Contenido Donde Se Coloco Una Imagen Y Titulo Fin-->
                        <!--Contenido De Input Que Estan Dentro De Diferentes Card En Orden Inicio-->
                        <form action="/agregarNuevo" method="post" class="mt-3">
                            @csrf
                            @method('POST')
                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                <div class="col">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="ms-3"><i class="fas fa-user"></i> Nombre Completo</h4>
                                            <input type="text"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                name="name" id="name" required placeholder="Nombre Completo"
                                                aria-label="Nombre Completo">
                                            <!---->
                                            <h4 class=" ms-3 mt-3"><i class="fas fa-users-cog"></i> Usuario</h4>
                                            <input type="text"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                name="user" id="user" required placeholder="Usuario"
                                                aria-label="Usuario">
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <!---->
                                            <h4 class="ms-3"><i class="fas fa-envelope"></i> Email</h4>
                                            <input type="email"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                name="email" id="email" required placeholder="Email"
                                                aria-label="Email">
                                            <!---->
                                            <h4 class="ms-3 mt-3"><i class="fas fa-key"></i> Contraseña</h4>
                                            <input type="password"
                                                class="form-control text-center rounded-pill shadow-sm bg-body rounded mt-3"
                                                name="password" id="password" required placeholder="Contraseña"
                                                aria-label="Contraseña" minlength="4" maxlength="12">
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido De Botones Card Dentro Inicio-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <!--Boton Inicio-->
                                            <div class="d-grid gap-2">
                                                <button class="btn guardarBoton rounded-pill mt-3 mx-5 text-white"><i
                                                        class="fas fa-save"></i> Guardar</button>
                                            </div>
                                            <!--BotonFin-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 colorTransparente">
                                        <div class="card-body">
                                            <!--Boton Inicio-->
                                            <div class="d-grid gap-2">
                                                <a href="/" class="btn RegresarBoton rounded-pill mt-3"><i
                                                        class="fas fa-sign-out-alt"></i> regresar</a>
                                            </div>
                                            <!--BotonFin-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Contenido De Botones Card Dentro Fin-->
                        </form>
                        <br>
                        <!--Contenido De Input Que Estan Dentro De Diferentes Card En Orden Fin-->
                    </div>
                </div>
                <!--Contenido De Informacion Que Esta Dentro De Un Card Fin-->
            </div>
        </div>
    </div>
@endsection
