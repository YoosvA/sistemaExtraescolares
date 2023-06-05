@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-4">Generar Oficio de Liberación (Credito)</h1>
                <h2 class="ms-5">Instrucciones</h2>
                <h5 class="ms-5">Ingresa todos los datos que se te piden</h5>
                <!---Contenido De Botones Dentro De Card Para Que Obtengamos El Responsive Inicio-->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!---Card Son 4 Inicio-->
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!--Contenido De Boton Inicio Agregar-->
                                <div class="d-grid gap-2">
                                    <a href="/crearOficios" class="btn guardarBoton mt-3 rounded-pill"><i
                                            class="fas fa-user-plus"></i> Agregar Datos Del Estudiante</a>
                                </div>
        
                                <!--Contenido De Boton Fin Agregar-->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
                                <!--Contenido De Boton Inicio Regresar-->
                                <div class="d-grid gap-2">
                                    <a href="/vistaCreditos" class="btn RegresarBoton mt-3  rounded-pill"><i
                                            class="fas fa-sign-out-alt"></i> Regresar</a>
                                </div>
        
                                <!--Contenido De Boton Fin Regresar-->
                            </div>
                        </div>
                    </div>
                    <!--Contenido Basio Dentro De Card Inicio-->
                    <div class="col">
                        <div class="card border-0 colorTransparente">
                            <div class="card-body">
        
                            </div>
                        </div>
                    </div>
                    <!--Contenido Basio Dentro De Card Fin-->
        
                    <!---Card Son 4 Fin-->
                </div>
                <!--Contenido De Botones Dentro De Card Para Que Obtengamos El Responsive Fin-->
                <!--Card Principal Inicio-->
                <div class="card border-0 shadow-lg  bg-body rounded rounded-5">
                    <div class="card-body">
                        <!--Contenido Dentro De Otra Card Inicio-->
                        <div class="card mt-4 mb-4 ms-4 mx-4">
                            <div class="card-body">
                                <table class="display responsive nowrap mt-4" style="width:100%" id="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="tex-center">No.</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Apellido Paterno</th>
                                            <th class="text-center">Apellido Materno</th>
                                            <th class="text-center">Numero de Control</th>
                                            <th class="text-center">Carrera</th>
                                            <th class="text-center">Credito</th>
                                            <th class="text-center">Periodo Escolar</th>
                                            <th class="text-center">Fecha</th>
                                            <th class="text-center">Generar Oficio</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nombreEstudiante }}</td>
                                                <td>{{ $item->apellidoPatEstudiante }}</td>
                                                <td>{{ $item->apellidoMatEstudiante }}</td>
                                                <td>{{ $item->noControlEstudiante }}</td>
                                                <td>{{ $item->carreraEstudiante }}</td>
                                                <td><br>{{ $item->creditoEstudiante }}</td>
                                                <td><br>{{ $item->periodoEstudiante }}</td>
                                                <td><br>{{ $item->created_at }}</td>
        
                                                <td>
                                                    <br>
                                                    <a href="{{ route('verPDFOficios', $item->id) }}" class="btn btn-success"
                                                        target="_blank"><i class="fas fa-file-pdf"></i></a>
                                                </td>
        
                                                <td>
                                                    <br>
        
                                                    <a href="{{ route('editarOficios', $item->id) }}" class="btn btn-warning"><i
                                                            class="fas fa-user-edit"></i> Editar</a>
                                                </td>
                                                <td>
                                                    <br>
                                                    <form action="{{ route('destroyOficios', $item->id) }}" method="POST">
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
                        <!--Contenido Dentro De Otra card Fin-->
                    </div>
                </div>
                <!--Card Principal Fin-->
                <!--Fin De Contenido De Container -->
            </div>
        </div>
    </div>
@endsection
