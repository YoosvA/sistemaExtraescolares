@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido De Card Inicio-->
                <br><br><br><br><br><br>
                <div class="card shadow-lg bg-body rounded border-0 rounded-5 mt-4">
                    <div class="card-body">
                        <!--Card Donde Contiene Una Img Fin-->
                        <div
                            class="card position-absolute top-0 start-50 translate-middle rounded-circle shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <img src="{{ asset('img/TecnmCircular.png') }}"
                                    class="tamañoDeImgTecnmCircular img-fluid "alt="">
                            </div>
                            <!--Card Donde Contiene Una Img Fin-->
                        </div>
                        <br><br><br><br>
                        <h1 class="ms-5 mt-4">Editar Usuarios </h1>
                        <h2 class="ms-5 mt-2 mb-4">Instrucciones</h2>
                        <h5 class="ms-5">Ingresa todos los datos que se te piden..</h5>
                        <!--Contenido De Adentro Card Inicio-->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <form action="{{ route('updateUsuarios', $items->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="col">
                                            <h4 class="ms-3"><i class="fas fa-user"></i> Nombre Completo</h4>
                                            <input type="text" name="name" id="name"
                                                class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                value="{{ $items->name }}" required>
                                            <h4 class="ms-3 mt-3"><i class="fas fa-envelope"></i> Correo</h4>
                                            <input type="email" name="email" id="email"
                                                class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                value="{{ $items->email }}" required>
                                        </div>
                                        <div class="col">


                                            <h4 class="ms-3"><i class="fas fa-user"></i> Nombre Usuario</h4>
                                            <input type="text" name="user" id="user"
                                                class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                value="{{ $items->user }}" required>
                                            <h4 class="ms-3 mt-3"><i class="fas fa-key"></i> password</h4>
                                            <input type="password" name="password" id="password"
                                                class="form-control rounded-pill text-center shadow-sm  bg-body"
                                                value="" required placeholder="ingresa tu nueva contraseña">

                                            <!--Contenido De Botones Dentro De 2 Card Inicio-->
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card border-0">
                                                        <div class="card-body">
                                                            <!--Primer Boton Inicio-->
                                                            <div class="d-grid gap-2">
                                                                <button
                                                                    class="btn colorDeBotonazul rounded-pill mt-3 text-white"><i
                                                                        class="fas fa-save"></i> Actualizar</button>
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
                                                                <a href="/listadoUsuarios"
                                                                    class="btn btn btn-danger rounded-pill mt-3"><i
                                                                        class="fas fa-sign-out-alt"></i> Regresar</a>
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
