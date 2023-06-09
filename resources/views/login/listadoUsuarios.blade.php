@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col mt-4">
                <br>
                <!--Card Inicio Contenido Card Tendra Otro Card-->
                <div class="card shadow-lg  bg-body rounded border-0 rounded-5">
                    <div class="card-body">
                        <!--Contenido De Boton Regresar Dentro De Un Card Inicio-->
                        <h1 class=" text-center mt-4">Listado Usuarios</h1>
                        <div class="row mt-2 mb-4 ms-4 mx-4">
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <h2 class="mt-4 mb-2 text-center">INSTRUCCIONES</h2>
                                        <h5 class="text-center mt-2">En tos 3 botones tendras opciones donde contendran
                                            diferentes vistas...</h5>
                                        <!--Contenido Inicio Boton-->
                                        <div class="d-grid gap-2 mt-2 mb-2">
                                            <a href="/inicio" class="btn RegresarBoton mt-3 rounded-pill"><i
                                                    class="fas fa-sign-out-alt"></i> Regresar</a>
                                        </div>
                                        <!--Contenido Fin Boton-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!----->
                                        <div
                                            class="card position-absolute top-0 start-50 translate-midde rounded-circle shadow-lg bg-body rounded border-0">
                                            <div class="card-body">
                                                <img src="{{ asset('img/TecnmCircular.png') }}"
                                                    class="tamañoDeImgTecnmCircular img-fluid "alt="">
                                            </div>
                                        </div>
                                        <!----->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Boton Regresar Dentro De Un Card Fin-->
                        <br>
                        <h1 class="text-center mt-4">Contenido De Datos En La Tabla</h1>
                        <br>
                        <!--Contenido Dentro De Card Inicio-->
                        <div class="card mt-4 mb-4 ms-4 mx-4 shadow-sm bg-body rounded rounded-4 text-center">
                            <div class="card-body">
                                <table class="display responsive nowrap mt-4 text-center shadow-sm bg-body rounded"
                                    style="width:100%" id="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nombre Completo</th>
                                            <th class="text-center">Correo</th>
                                            <th class="text-center">Usuario</th>
                                            <th class="text-center">Contraseña</th>
                                            <th class="text-center">Creacion</th>
                                            <th class="text-center">Actualizado</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->user }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td><br>{{ $item->created_at }}</td>
                                                <td><br>{{ $item->updated_at }}</td>


                                                <td>
                                                    <br>
                                                    <a href="{{ route('editarUsuarios', $item->id) }}"
                                                        class="btn EditarBoton"><i class="fas fa-user-edit"></i> Editar</a>
                                                </td>
                                                <td>
                                                    <br>
                                                    <form action="{{ route('destroyUsuarios', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn RegresarBoton"><i class="fas fa-trash"></i>
                                                            Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Contenido Dentro De Card Fin-->
                    </div>
                </div>
                <!--Card Fin Contenido Card Tendra Otro Card-->
            </div>
        </div>
    </div>
@endsection
