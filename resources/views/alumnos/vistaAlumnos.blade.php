@extends('layouts/main')

@section('contenido')
    <!--Inicio De Container-->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido Inicio-->
                <!--Contenido Card Inicio-->
                <br><br>
                <div class="card shadow-lg bg-body rounded border-0 rounded-5 mt-4">
                    <div class="card-body">
                        <!--Inicio-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <!--Contenido Texto Inicio-->
                                        <h1 class="ms-4 mt-4">Agregar Datos del Alumno</h1>
                                        <h2 class="ms-4 mt-4">Instrucciones</h2>
                                        <br>
                                        <h5 class="ms-4">En el botón de “agregar alumno” te llevara a una vista en 
                                            dónde podrás agregar los datos del alumno por medio de un formulario y 
                                            el botón de “regresar” te llevara al menú principal.</h5>
                                        <!--Boton Inicio-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card colorTransparente border-0">
                                                    <div class="card-body">
                                                        <!---->
                                                        <div class="d-grid gap-2">
                                                            <a href="/crearAlumnos"
                                                                class="btn guardarBoton  mt-3 rounded-pill text-white"><i
                                                                    class="fas fa-user-plus"></i> Agregar Alumno</a>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card colorTransparente border-0">
                                                    <div class="card-body">
                                                        <!---->
                                                        <div class="d-grid gap-2">
                                                            <a href="/inicio" class="btn RegresarBoton mt-3 rounded-pill"><i
                                                                    class="fas fa-sign-out-alt"></i> Regresar</a>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Boton Inicio-->
                                        <!--Contenido De Card Botones Dentro Inicio-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card ms-4 colorTransparente border-0">
                                    <div class="card-body ms-4">
                                        <!--Img Inicio-->
                                        <!----->
                                        <div class="card rounded-pill tamañoDeLogoVistaAlumno ms-4 shadow-lg bg-body rounded border-0">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <br>
                                                    <img src="{{ asset('img/TecnmCircular.png') }}"
                                                    class="tamañoDeVistaAlumnoImg img-fluid "alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!----->
                                        <!--Img Fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Card Botones Dentro Fin-->
                        <!--Contenido Texto Fin-->

                        <!--Contenido De Informacion Card Inicio-->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <!--Dentro De Una Card Esta La Tabla-->
                                <div class="card shadow-sm bg-body rounded rounded-4 text-center">
                                    <div class="card-body">
                                        <table class="display responsive nowrap text-center shadow-sm bg-body rounded" style="width:100%"
                                            id="table">
                                            <thead class="text-center">
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Nombre</th>
                                                    <th class="text-center">Apellido Paterno</th>
                                                    <th class="text-center">Apellido Materno</th>
                                                    <th class="text-center">Numero de Control</th>
                                                    <th class="text-center">Teléfono Celular</th>
                                                    <th class="text-center">Carrera</th>
                                                    <th class="text-center">Fecha de Nacimiento</th>
                                                    <th class="text-center">Escuela de Procedencia</th>
                                                    <th class="text-center">Fecha de ingresó al Tecnológico</th>
                                                    <th class="text-center">Editar</th>
                                                    <th class="text-center">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->apellidoPaterno }}</td>
                                                        <td>{{ $item->apellidoMaterno }}</td>
                                                        <td>{{ $item->noControl }}</td>
                                                        <td>{{ $item->telefono }}</td>
                                                        <td>{{ $item->carrera }}</td>
                                                        <td><br>{{ $item->fechaNac }}<br></td>
                                                        <td><br>{{ $item->escuelaProcedencia }}<br></td>
                                                        <td><br>{{ $item->fechaIngreso }}<br></td>
                                                        <td>
                                                            <br>
                                                            <a href="{{ route('editarAlumnos', $item->id) }}"
                                                                class="btn EditarBoton rounded-pill"><i
                                                                    class="fas fa-user-edit"></i> Editar</a>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn RegresarBoton rounded-pill"><i
                                                                        class="fas fa-trash"></i> Eliminar</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Informacion Card Fin-->
                    </div>
                </div>
                <!--Contenido Card Fin-->
            </div>
        </div>
    </div>
    <!--Fin De Card-->
@endsection
