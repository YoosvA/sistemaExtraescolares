@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-4">Listado Usuarios</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">En tos 3 botones tendras opciones donde contendran diferentes vistas...</h5>
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!--Contenido Inicio Boton-->
                                <div class="d-grid gap-2">
                                    <a href="/inicio" class="btn RegresarBoton mt-3 rounded-pill"><i
                                            class="fas fa-sign-out-alt"></i> Regresar</a>
                                </div>
                                <!--Contenido Fin Boton-->
                            </div>
                        </div>
                    </div>

                </div>
                <!--Card Contenido De Botones Fin-->

                <!--Card Inicio Contenido Card Tendra Otro Card-->
                <div class="card shadow-lg  bg-body rounded border-0 rounded-5">
                    <div class="card-body">
                        <!--Contenido Dentro De Card Inicio-->
                        <div class="card mt-4 mb-4 ms-4 mx-4">
                            <div class="card-body">
                                <table class="display responsive nowrap mt-4" style="width:100%" id="table">
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
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                              
        
                                                <td>
                                                    <br>
                                                    <a href="{{ route('editarUsuarios', $item->id) }}" class="btn btn-warning"><i
                                                            class="fas fa-user-edit"></i> Editar</a>
                                                </td>
                                                <td>
                                                    <br>
                                                    <form action="{{ route('destroyUsuarios', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"><i class="fas fa-trash"></i>
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
