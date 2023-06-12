@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <!--Contenido Card Principal Inicio-->
                <div class="card rounded-5 shadow-lg bg-body rounded border-0 mt-4">
                    <div class="card-body">
                        <!--Contenido Card Informacion Inicio-->
                        <div class="row">
                            <div class="col mt-4 mb-4 ms-4 mx-4">
                                <form action="/storeEventos" method="post">
                                    @csrf
                                    @method('POST')

                                    <!--Contenido Card Dentro Tendras 2 Vistas Inicio-->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card border-0 colorTransparente">
                                                <div class="card-body">
                                                    <br><br>
                                                    <!---->
                                                    <h1 class="mt-4 text-center"> <b>Agregar Evento</b> </h1>
                                                    <h2 class="text-center mt-2 mb-2"> <b>Instrucciones</b> </h2>
                                                    <h5 class="ms-5">Agrega el nombre del evento con el cual se darán horas de participación.</h5>
                                                    <!--Contenido De Texto Informacion-->
                                                    <br>
                                                    <h4 class="text-center"><i class="fas fa-calendar-check"></i> Nombre del
                                                        Evento</h4>
                                                    <input type="text" name="nombreEvento" id="nombreEvento"
                                                        class="form-control text-center rounded-pill shadow-sm  bg-body rounded mt-3"
                                                        placeholder="Nombre Del Evento" aria-label="Nombre Del Evento"
                                                        required>
                                                    <!---->
                                                    <!--Contenido Card 2 Botones Inicio-->
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="card border-0">
                                                                <div class="card-body">
                                                                    <!--Contenido De Botones Inicio-->
                                                                    <div class="d-grid gap-2">
                                                                        <button
                                                                            class="btn guardarBoton mt-3 rounded-pill"><i
                                                                                class="fas fa-save"></i> Guardar</button>
                                                                    </div>
                                                                    <!--Contenido De Botones Fin-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="card border-0">
                                                                <div class="card-body">
                                                                    <!--Contenido De Botones Inicio-->
                                                                    <div class="d-grid gap-2">
                                                                        <a href="/vistaNotas"
                                                                            class="btn RegresarBoton mt-3 rounded-pill"><i
                                                                                class="fas fa-sign-out-alt"></i>
                                                                            regresar</a>
                                                                    </div>
                                                                    <!--Contenido De Botones Fin-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Contenido Card 2 Botones Fin-->
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card border-0 colorTransparente">
                                                <div class="card-body ms-5">
                                                    <!--Img Inicio-->
                                                    <!----->
                                                    <div
                                                        class="card rounded-pill tamañoDeLogoVistaAlumno ms-4 shadow-lg bg-body rounded border-0">
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

                                    <!--Contenido Card Dentro Tendras 2 Vistas Fin-->
                                </form>
                            </div>
                        </div>
                        <!--Contenido Card Informacion Fin-->
                    </div>
                </div>
                <!--Contenido Card Principal Fin-->
            </div>
        </div>
    </div>
@endsection
