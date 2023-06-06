@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Inicio-->
                <div class="col-md-12">
                    <div id="DatosPersonalesDelAlumno">
                        <!---->
                        <br>
                        <!---->
                        <div class="card border-0 shadow-lg bg-body rounded rounded-5 mt-4">
                            <div class="card-body mt-4 mb-4 ms-4 mx-4">
                                <h1 class="text-center">Datos Personales Del Alumno</h1>
                                <h2 class="mt-2">Caracteristicas</h2>
                                <h4>En esta vista podras Agregar,eliminar o Editar los datos de los estudiantes</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.
                                                    Deserunt,
                                                    id corporis.
                                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime,
                                                    rerum
                                                    rem aliquid
                                                    vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum
                                                    dolor
                                                    sit amet
                                                    consectetur adipisicing elit. Deserunt, id corporis.
                                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime,
                                                    rerum
                                                    rem aliquid
                                                    vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                                                <!--Parte de boton-->
                                                <br>
                                                <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                                    <a href="/vistaAlumnos"
                                                        class="btn colorDeBotonazul rounded-pill border-0">
                                                        <h5 class="text-white">Entrar</h5>
                                                    </a>
                                                </div>
                                                <!--Parte de boton-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/Persona1.jpg') }}"
                                                        class="rounded-circle tamañoDeImgPersona img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <br>
                        <!---->

                    </div>
                    <!-- ///////////////// -->
                    <div class="divFondoPrimero " id="Creditos">
                        <!---->
                        <br>
                        <!---->
                        <div class="card border-0 shadow-lg bg-body rounded rounded-5 mt-4">
                            <div class="card-body mt-4 mb-4 ms-4 mx-4">
                                <h1>Creditos</h1>
                                <h2 class="ms-5">Caracteristicas</h2>
                                <h5 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
                                    quos
                                    sequi
                                    expedita quo odit
                                    inventore
                                    neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem
                                    ipsa
                                    recusandae
                                    voluptas!Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi
                                    expedita quo
                                    odit
                                    inventore
                                    neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem
                                    ipsa
                                    recusandae
                                    voluptas!</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/Persona2.jpg') }}"
                                                        class="rounded-circle tamañoDeImgPersona img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.
                                                    Deserunt,
                                                    id corporis.
                                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime,
                                                    rerum
                                                    rem aliquid
                                                    vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum
                                                    dolor
                                                    sit amet
                                                    consectetur adipisicing elit. Deserunt, id corporis.
                                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime,
                                                    rerum
                                                    rem aliquid
                                                    vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                                                <!--Parte de boton-->
                                                <br>
                                                <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                                    <a href="/vistaCreditos"
                                                        class="btn colorDeBotonazul rounded-pill border-0">
                                                        <h5 class="text-white">Entrar</h5>
                                                    </a>
                                                </div>
                                                <!--Parte de boton-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <br>
                        <!---->

                    </div>
                    <!-- ///////////////// -->
                    <div class="ImagenFondoDos" id="NotasDeParticipacion">
                        <!---->
                        <div class="card border-0 shadow-lg bg-body rounded rounded-5 mt-4">
                            <div class="card-body mt-4 mb-4 ms-4 mx-4">
                                <h1>Notas De Participacion</h1>
                                <h2 class="ms-5">Caracteristicas</h2>
                                <h5 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                    id
                                    corporis.
                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                    vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Deserunt, id corporis.
                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                    vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit.
                                                    Deserunt,
                                                    id corporis.
                                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime,
                                                    rerum
                                                    rem aliquid
                                                    vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum
                                                    dolor
                                                    sit amet
                                                    consectetur adipisicing elit. Deserunt, id corporis.
                                                    Eveniet praesentium assumenda laudantium deserunt omnis est maxime,
                                                    rerum
                                                    rem aliquid
                                                    vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                                                <!--Parte de boton-->
                                                <br>
                                                <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                                    <!--FALTA COLOCAR LA DIRECCION DONDE VA A ESTAR DIRIGIDO OSVALDO EN EL HREF-->
                                                    <a href="/vistaNotas"
                                                        class="btn colorDeBotonazul rounded-pill border-0">
                                                        <h5 class="text-white">Entrar</h5>
                                                    </a>
                                                </div>
                                                <!--Parte de boton-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="{{ asset('img/Persona3.jpg') }}"
                                                        class="rounded-circle tamañoDeImgPersona img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                    </div>
                    <!--Fin-->
                </div>
            </div>
        </div>
    </div>
@endsection
