@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="card position-absolute top-50 start-50 translate-middle shadow-lg bg-body rounded rounded border-0 rounded-5">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/TecnmCircular.png') }}" class="tamañoDeImgTecnmCircular img-fluid"
                            alt="">
                        <h1 class="text-center mt-2">Agregar Usuario</h1>

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
                                            class="btn PrimerBotonDeAgregarNuevoUsuario mt-3 mx-5 text-white">Guardar</button>
                                        <a href="/" class="btn btn-success mt-3">regresar</a>


                                    </div>

                                </div>
                            </div>

                        </form>

                        {{--     <form action="/agregarNuevo" method="post" class="mt-3">
                            @csrf
                            @method('POST')
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <label for="user">Usuario</label>
                            <input type="text" class="form-control" name="user" id="user" required>
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <button class="btn btn-primary mt-3">Guardar</button>
                            <a href="/" class="btn btn-success mt-3">regresar</a>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
