@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <!--Contenido De Container Inicio-->
                <!--Contenido De Card Tabla Inicio-->
                <div class="card shadow-lg bg-body rounded border-0 rounded-5">
                    <div class="card-body">
                        <!--Texto Principal Inicio-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <br>
                                        <h1 class="text-center mt-4">Creditos</h1>
                                        <h2 class="mt-2 mb-2">Instrucciones</h2>
                                        <h5 class="mt-4">En estos 4 botones tendras opciones donde contendra una de
                                            agregar creditos,
                                            agregar carpeta y crear oficios de liberacion y regresar el menu por si te
                                            equivocas al tomar
                                            una desicion.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card colorTransparente border-0">
                                    <div class="card-body ms-4">
                                        <!--Card Donde Contiene Img Inicio-->
                                        <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0 ms-4">
                                            <div class="card-body">
                                                <!--Contenido De Img Inicio-->
                                                <div class="text-center">
                                                    <img src="{{ asset('img/TecnmCircular.png') }}"
                                                        class="tamañoDeImgRedesSociales rounded-circle img-fluid"
                                                        alt="">
                                                </div>
                                                <!--Contenido De Img Fin-->
                                            </div>
                                        </div>
                                        <!--Card Donde Contiene Img Inicio--></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Texto Principal Fin-->

                        <!--Contenido De Card Botones Inicio Son 4-->
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            <div class="col">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!---->
                                        <div class="d-grid gap-2">
                                            <a href="/crearCreditos"
                                                class="btn guardarBoton mt-3 rounded-pill text-white"><i
                                                    class="fas fa-plus"></i> Agregar Creditos</a>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!---->
                                        <div class="d-grid gap-2">
                                            <a href="/crearCarpetas"
                                                class="btn guardarBoton mt-3 rounded-pill text-white"><i
                                                    class="fas fa-folder-plus"></i> Agregar Carpeta</a>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!---->
                                        <div class="d-grid gap-2">
                                            <a href="/vistaOficios" class="btn guardarBoton mt-3 rounded-pill text-white"><i
                                                    class="fas fa-clipboard"></i> Crear Oficios de
                                                Liberacion</a>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!---->
                                        <div class="d-grid gap-2">
                                            <a href="/inicio" class="btn RegresarBoton mt-3 rounded-pill text-white"><i
                                                    class="fas fa-sign-out-alt"></i> Regresar</a>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Card Botones Fin Son 4-->

                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4 text-center">
                                <div class="card shadow-sm bg-body rounded rounded-4 text-center">
                                    <div class="card-body">
                                        <!--Contenido De Table Inicio-->
                                        <table class="display responsive nowrap mt-4 text-center shadow-sm bg-body rounded"
                                            style="width:100%" id="table">
                                            <thead class="text-center">
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Nombre</th>
                                                    <th class="text-center">Apellido Paterno</th>
                                                    <th class="text-center">Apellido Materno</th>
                                                    <th class="text-center">Credito</th>
                                                    <th class="text-center">Mooc</th>
                                                    <th class="text-center">Constancia</th>
                                                    <th class="text-center">Oficio de Liberacion</th>
                                                    <th class="text-center">Evidencia</th>
                                                    <th class="text-center">Carpeta Fisica</th>
                                                    <th class="text-center">Estado</th>
                                                    <th class="text-center">Fecha de Registro</th>
                                                    <th class="text-center">Editar</th>
                                                    <th class="text-center">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->nombreAlumnosCreditos }}</td>
                                                        <td>{{ $item->apellidoPaternoCreditos }}</td>
                                                        <td>{{ $item->apellidoMaternoCreditos }}</td>
                                                        <td>{{ $item->nombreCredito }}</td>
                                                        <td>
                                                            @if (!empty($item->mooc))
                                                                <a class="btn colorBoton1 rounded-pill text-white"
                                                                    href="{{ asset($item->mooc) }}" target="_blank"><i
                                                                        class="fas fa-eye"></i> Mostrar</a>
                                                            @else
                                                                No se ha agregado el archivo
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if (!empty($item->constancia))
                                                                <a class="btn colorBoton2 rounded-pill text-white"
                                                                    href="{{ asset($item->constancia) }}" target="_blank"><i
                                                                        class="fas fa-eye"></i> Mostrar</a>
                                                            @else
                                                                No se ha agregado el archivo
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if (!empty($item->oficioLiberacion))
                                                                <a class="btn colorBoton3 rounded-pill text-white"
                                                                    href="{{ asset($item->oficioLiberacion) }}"
                                                                    target="_blank"><i class="fas fa-eye"></i> Mostrar</a>
                                                            @else
                                                                No se ha agregado el archivo
                                                            @endif

                                                        </td>
                                                        <td>
                                                            <br>
                                                            @if (!empty($item->evidencia))
                                                                <a class="btn colorBoton4 rounded-pill text-white"
                                                                    href="{{ asset($item->evidencia) }}" target="_blank"><i
                                                                        class="fas fa-eye"></i> Mostrar</a>
                                                            @else
                                                                No se ha agregado el archivo
                                                            @endif
                                                        </td>
                                                        <td><br> {{ $item->carpeta }} <br></td>
                                                        <td>
                                                            <form action="{{ route('cambiarEstado', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <!--Color De Botones Cambiamos - > btn btn-success = pdfBoton - > btn btn-primary = CambioDeColorAzul-->
                                                                <button type="submit"
                                                                    class="btn btn-primary rounded-pill text-white {{ $item->estado === 'Liberado' ? 'pdfBoton' : 'CambioDeColorAzul' }}">
                                                                    {{ $item->estado ?: 'En proceso' }}
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td><br> {{ $item->created_at }} <br></td>
                                                        <td>
                                                            <br>
                                                            <a href="{{ route('editarCreditos', $item->id) }}"
                                                                class="btn EditarBoton rounded-pill text-white"><i
                                                                    class="fas fa-edit"></i> Editar</a>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('destroyCreditos', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn RegresarBoton rounded-pill text-white"><i
                                                                        class="fas fa-trash"></i> Eliminar</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!--Contenido De Tabla Fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Contenido De Card Tabla Fin-->
                <!--Contenido De Container Fin-->
            </div>
        </div>
    </div>
@endsection
