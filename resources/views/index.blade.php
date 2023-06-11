@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                
                <!---->
                <br><br><br>
                    <div class="card colorTransparente border-0" data-aos="zoom-in" data-aos-duration="4000">
                        <div class="card-body">
                            <br><br>
                            <h1 class="text-center"> <b>SISTEMA EXTRAESCOLARES</b> </h1>
                            <!---->
                            <div class="row">
                                <div class="col-sm-6">
                                  <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <br><br><br><br><br>
                                        <!---->
                                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Hf3RXUpe06A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        <!---->
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="card colorTransparente border-0">
                                    <div class="card-body">
                                        <br>
                                        <h1 class="text-center mt-2 mb-4"> <b>Instituto Tecnologico De Milpa Alta II</b> </h1>
                                        <h4 class="text-justify">El origen de los Institutos Tecnológicos se remonta a finales de la década de los 50’s, pero en la CDMX los Institutos tecnológicos nacieron por decreto presidencial el 24 de julio de 2014 por el presidente Enrique Peña Nieto constituyendose así el Tecnológico Nacional de México (TNM) <br>Que tiene adscritos a 266 Institutos Tecnológicos, unidades y centros de investigación, docencia y desarrollo de educación superior tecnológica.</h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!---->
                        </div>
                        <h4 class="text-center text-justify ">El Instituto Tecnológico de Milpa Alta II (ITMA II) es un plantel de reciente creación dentro del sistema educativo implementado en la CDMX por la entonces Dirección General de Educación Superior Tecnológica (DGEST), y que consistió en la apertura de 12 Institutos Tecnológicos en la capital del país.</h4>
                    </div>
                <!---->

                    <br><br><br>
                <!--Inicio-->
                <div class="col-md-12">
                    <div id="DatosPersonalesDelAlumno">
                        <!---->
                        <br><br><br><br><br>
                        <!---->
                        <div data-aos="fade-left" data-aos-duration="4000" class="card border-0 shadow-lg bg-body rounded rounded-5 mt-4">
                            <div class="card-body mt-4 mb-4 ms-4 mx-4">
                                <h1 class="text-center"> <b>Datos Personales Del Alumno</b> </h1>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <h5 class="mt-4 mb-4">En este apartado se podrán ingresar todos los datos de los estudiantes de 
                                                    distintas carreras las cuales son: 
                                                    <br> <br>
                                                    1- Ingeniería en Sistemas Computacionales
                                                    <br>
                                                    2- Ingeniería en Gestión Empresarial
                                                    <br>
                                                    3- Ingeniería Industrial
                                                </h5>
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
                    <div data-aos="fade-right" data-aos-duration="4000" class="divFondoPrimero " id="Creditos">
                        <!---->
                        <br>
                        <!---->
                        <div  class="card border-0 shadow-lg bg-body rounded rounded-5 mt-4">
                            <div class="card-body mt-4 mb-4 ms-4 mx-4">
                                <h1 class="text-center"> <b>Créditos</b> </h1>
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
                                                <h5 class="mt-4 mb-4">En este apartado podrás generar los oficios de liberación de 
                                                    las distintas actividades extraescolares que se imparten las cuales son:
                                                    <br><br>
                                                    1-	Culturales
                                                    <br>
                                                    2-	Cívicas
                                                    <br>
                                                    3-	Deportivas
                                                    <br><br>
                                                    Además de que podrás llevar un registro con todos los datos y documentos del 
                                                    alumno y saber si su trámite está en proceso o ya fue liberado.
                                                    
                                                    </h5>
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
                        <div data-aos="fade-left" data-aos-duration="4000" class="card border-0 shadow-lg bg-body rounded rounded-5 mt-4" >
                            <div class="card-body mt-4 mb-4 ms-4 mx-4">
                                <h1 class="text-center"> <b>Notas De Participación</b> </h1>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card border-0 colorTransparente">
                                            <div class="card-body">
                                                <h5 class="mt-4 mb-4">En este apartado podrás generar las notas de participación por horas de 
                                                    los estudiantes que participaron en algún evento.</h5>
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
                <br>
                <h1 class="mt-4 text-center" data-aos="zoom-in" data-aos-duration="4000"> <b>ALGUNAS DE LAS REDES SOCIALES DE LA ESCUELA</b> </h1>
                <!--Botones De Redes Sociales Inicio-->
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
                    <div class="col">
                        <div data-aos="slide-up" data-aos-duration="4000" class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
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
                        <div data-aos="fade-down" data-aos-duration="4000" class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
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
                        <div data-aos="slide-up" data-aos-duration="4000" class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
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
                        <div data-aos="fade-down" data-aos-duration="4000" class="card rounded-circle tamaño shadow-lg bg-body rounded border-0">
                            <div class="card-body">
                                <!--Contenido De Img Inicio IMG-> DE INSTAGRAM FALTA MODIFICAR LA DIRECCION-->
                                <div class="text-center">
                                    <a href="https://www.instagram.com/tecnmcampusmilpaalta2/?hl=es-la" target="_blank"><img
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
                <!--Fin-->
            </div>
        </div>
    </div>
@endsection
