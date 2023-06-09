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
                                                <div class="d-grid gap-2">
                                                    <a href="/vistaAlumnos" class="btn guardarBoton rounded-pill border-0">
                                                        <h5 class="text-white">Entrar</h5>
                                                    </a>
                                                </div>
                                                <!--Parte de boton-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente ms-4">
                                            <div class="card-body ms-4">
                                                <!--Card Donde Contiene Img Inicio-->
                                                <div
                                                    class="card rounded-circle tamaño shadow-lg bg-body rounded border-0 ms-4">
                                                    <div class="card-body">
                                                        <!--Contenido De Img Inicio-->
                                                        <div class="text-center">
                                                            <img src="{{ asset('img/Persona1.jpg') }}"
                                                                class="tamañoDeImgRedesSociales rounded-circle img-fluid"
                                                                alt="">
                                                        </div>
                                                        <!--Contenido De Img Fin-->
                                                    </div>
                                                </div>
                                                <!--Card Donde Contiene Img Inicio-->
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
                                                <!--Card Donde Contiene Img Inicio-->
                                                <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
                                                    <div class="card-body">
                                                        <!--Contenido De Img Inicio-->
                                                        <div class="text-center">
                                                            <img src="{{ asset('img/Persona2.jpg') }}"
                                                                class="tamañoDeImgRedesSociales rounded-circle img-fluid"
                                                                alt="">
                                                        </div>
                                                        <!--Contenido De Img Fin-->
                                                    </div>
                                                </div>
                                                <!--Card Donde Contiene Img Inicio-->
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
                                                <div class="d-grid gap-2">
                                                    <a href="/vistaCreditos" class="btn guardarBoton rounded-pill border-0">
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
                        <br>
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
                                                <div class="d-grid gap-2">
                                                    <!--FALTA COLOCAR LA DIRECCION DONDE VA A ESTAR DIRIGIDO OSVALDO EN EL HREF-->
                                                    <a href="/vistaNotas" class="btn guardarBoton rounded-pill border-0">
                                                        <h5 class="text-white">Entrar</h5>
                                                    </a>
                                                </div>
                                                <!--Parte de boton-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente ms-4">
                                            <div class="card-body ms-4">

                                                <!--Card Donde Contiene Img Inicio-->
                                                <div
                                                    class="card rounded-circle tamaño shadow-lg bg-body rounded border-0 ms-4">
                                                    <div class="card-body">
                                                        <!--Contenido De Img Inicio-->
                                                        <div class="text-center">
                                                            <img src="{{ asset('img/Persona3.jpg') }}"
                                                                class="tamañoDeImgRedesSociales rounded-circle img-fluid"
                                                                alt="">
                                                        </div>
                                                        <!--Contenido De Img Fin-->
                                                    </div>
                                                </div>
                                                <!--Card Donde Contiene Img Inicio-->

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
                    <!--Fin-->
                </div>
                <!--Botones De Redes Sociales Inicio-->
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
                    <div class="col">
                        <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <!--Contenido De Img Inicio-->
                                <div class="text-center">
                                    <a href="https://www.youtube.com/channel/UCXJVuz9lnFc03mObS-0wYOg/videos"
                                        target="_blank"><img src="{{ asset('img/YouTube.jpg') }}"
                                            class="tamañoDeImgRedesSociales rounded-circle" alt=""></a>
                                </div>
                                <!--Contenido De Img Fin-->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <!--Contenido De Img Inicio-->
                                <div class="text-center">
                                    <a href="https://www.facebook.com/tecnmcampusmilpaaltaii/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_review_changes=0&show_community_rollback=0&show_follower_visibility_disclosure=0"
                                        target="_blank"><img src="{{ asset('img/Facebook.png') }}"
                                            class="tamañoDeImgRedesSociales" alt=""></a>
                                </div>
                                <!--Contenido De Img Fin-->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <!--Contenido De Img Inicio-->
                                <div class="text-center">
                                    <a href="https://milpaalta2.tecnm.mx/" target="_blank"><img
                                            src="{{ asset('img/ITMAII.png') }}" class="tamañoDeImgRedesSociales"
                                            alt=""></a>
                                </div>
                                <!--Contenido De Img Fin-->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <!--Contenido De Img Inicio IMG-> DE INSTAGRAM FALTA MODIFICAR LA DIRECCION-->
                                <div class="text-center">
                                    <a href="https://milpaalta2.tecnm.mx/" target="_blank"><img
                                            src="{{ asset('img/LogoInstagram.webp') }}"
                                            class="tamañoDeImgRedesSociales rounded-circle" alt=""></a>
                                </div>
                                <!--Contenido De Img Fin-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Botones De Redes Sociales Fin-->
                <br><br><br><br>
            </div>
        </div>
    </div>
@endsection
