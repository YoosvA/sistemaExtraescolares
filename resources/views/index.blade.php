<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{--     <link rel="stylesheet" href="{{ 'css/style.css' }}"> --}}
    <link rel="stylesheet" href="{{ 'css/all.css' }}">
    <link rel="stylesheet" href="{{ 'css/sidebar.css' }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>{{ $titulo }}</title>
</head>

<body class="colorDeFondo">
<<<<<<< HEAD
    @include('sidebar')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-md-12">
                    <div class="ImagenEnchiladas img-fluid" id="DatosPersonalesDelAlumno">
=======
    <main class="main">
        <div class="menu" id="menu">
            <button>=</button>
            <div class="menu-content">
                <ul>
                    <li>
                        <div class="text-center">
                            &nbsp;&nbsp;&nbsp;
                            <img src="{{ asset('img/LOGO_TECNM_BLANCO.png') }}" class="tamañoDeLogoBlanco img-fluid" alt="">
                        </div>
                    </li>
                    <li>
                        <h3 class="text-center text-white">Sistema <br> ExtraEscolares</h3>
                    </li>
                    <li><a href="#DatosPersonalesDelAlumno">Datos Personales <br> Del Alumno</a></li>
                    <li><a href="#Creditos">Creditos</a></li>
                    <li><a href="#NotasDeParticipacion">Notas De <br> Participacion</a></li>
                    <li><a href="/agregarUsuario">Agregar Usuario</a></li>
                    <li><a href="{{ route('logout') }}">Cerrar Seccion</a></li>
                    <li class="colorBlanco">
                        <hr>
                    </li>
                    <li class="colorBlanco text-center">Creative Code</li>
                </ul>
            </div>
        </div>
        <div class="content">
            <!---->
            <br>
            <h1 id="DatosPersonalesDelAlumno">Datos Personales Del Alumno</h1>
            <h2 class="ms-5">Caracteristicas</h2>
            <h4 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, id corporis.
                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Deserunt, id corporis.
                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                vel tempore incidunt perferendis eos quasi nostrum odit!</h4>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0 colorTransparente">
                        <div class="card-body">
                            <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                id corporis.
                                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Deserunt, id corporis.
                                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                            <!--Parte de boton-->
                            <br>
                            <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                <a href="/vistaAlumnos" class="btn colorDeBotonazul rounded-pill border-0">
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
                                <img src="{{ asset('img/Persona1.jpg') }}" class="rounded-circle tamañoDeImgPersona img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <!---->
            <h1 id="Creditos">Creditos</h1>
            <h2 class="ms-5">Caracteristicas</h2>
            <h5 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit
                inventore
                neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
                voluptas!Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo
                odit
                inventore
                neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
                voluptas!</h5>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0 colorTransparente">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('img/Persona2.jpg') }}" class="rounded-circle tamañoDeImgPersona img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0 colorTransparente">
                        <div class="card-body">
                            <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                id corporis.
                                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Deserunt, id corporis.
                                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                            <!--Parte de boton-->
                            <br>
                            <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                <a href="/vistaCreditos" class="btn colorDeBotonazul rounded-pill border-0">
                                    <h5 class="text-white">Entrar</h5>
                                </a>
                            </div>
                            <!--Parte de boton-->
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <!---->
            <h1 id="NotasDeParticipacion">Notas De Participacion</h1>
            <h2 class="ms-5">Caracteristicas</h2>
            <h4 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, id corporis.
                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Deserunt, id corporis.
                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                vel tempore incidunt perferendis eos quasi nostrum odit!</h4>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0 colorTransparente">
                        <div class="card-body">
                            <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                                id corporis.
                                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Deserunt, id corporis.
                                Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                                vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                            <!--Parte de boton-->
                            <br>
                            <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                <!--FALTA COLOCAR LA DIRECCION DONDE VA A ESTAR DIRIGIDO OSVALDO EN EL HREF-->
                                <a href="/vistaNotas" class="btn colorDeBotonazul rounded-pill border-0">
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
                                <img src="{{ asset('img/Persona3.jpg') }}" class="rounded-circle tamañoDeImgPersona img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </main>
    
    <script src="{{asset('js/mascaraDeCarga/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/mascaraDeCarga/jquery.blockUI.js')}}"></script>
    <script src="{{asset('js/mascaraDeCarga/mascara.js')}}"></script>
>>>>>>> b82bb9dc599783722a7402d32e052fd9642e2652


                        <!---->
                        <br>
                        <h1>Datos Personales Del Alumno</h1>
                        <h2 class="ms-5">Caracteristicas</h2>
                        <h4 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, id
                            corporis.
                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                            vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Deserunt, id corporis.
                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                            vel tempore incidunt perferendis eos quasi nostrum odit!</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Deserunt,
                                            id corporis.
                                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum
                                            rem aliquid
                                            vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor
                                            sit amet
                                            consectetur adipisicing elit. Deserunt, id corporis.
                                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum
                                            rem aliquid
                                            vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                                        <!--Parte de boton-->
                                        <br>
                                        <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                            <a href="/vistaAlumnos" class="btn colorDeBotonazul rounded-pill border-0">
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
                        <br><br><br><br>
                        <!---->

                    </div>
                    <!-- ///////////////// -->
                    <div class="ImagenFondo" id="Creditos">


                        <!---->
                        <h1>Creditos</h1>
                        <h2 class="ms-5">Caracteristicas</h2>
                        <h5 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos
                            sequi
                            expedita quo odit
                            inventore
                            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa
                            recusandae
                            voluptas!Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi
                            expedita quo
                            odit
                            inventore
                            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa
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
                                        <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Deserunt,
                                            id corporis.
                                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum
                                            rem aliquid
                                            vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor
                                            sit amet
                                            consectetur adipisicing elit. Deserunt, id corporis.
                                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum
                                            rem aliquid
                                            vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                                        <!--Parte de boton-->
                                        <br>
                                        <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                            <a href="/vistaCreditos" class="btn colorDeBotonazul rounded-pill border-0">
                                                <h5 class="text-white">Entrar</h5>
                                            </a>
                                        </div>
                                        <!--Parte de boton-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>
                        <!---->
                        <!---------------------->
                        <br><br>
                    </div>
                    <!-- ///////////////// -->
                    <div class="ImagenFondoDos" id="NotasDeParticipacion">


                        <!---->
                        <h1>Notas De Participacion</h1>
                        <h2 class="ms-5">Caracteristicas</h2>
                        <h4 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, id
                            corporis.
                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                            vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Deserunt, id corporis.
                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum rem aliquid
                            vel tempore incidunt perferendis eos quasi nostrum odit!</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <h5 class="mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Deserunt,
                                            id corporis.
                                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum
                                            rem aliquid
                                            vel tempore incidunt perferendis eos quasi nostrum odit!Lorem ipsum dolor
                                            sit amet
                                            consectetur adipisicing elit. Deserunt, id corporis.
                                            Eveniet praesentium assumenda laudantium deserunt omnis est maxime, rerum
                                            rem aliquid
                                            vel tempore incidunt perferendis eos quasi nostrum odit!</h5>
                                        <!--Parte de boton-->
                                        <br>
                                        <div class="d-grid gap-2 col-4 mt-4 mx-auto">
                                            <!--FALTA COLOCAR LA DIRECCION DONDE VA A ESTAR DIRIGIDO OSVALDO EN EL HREF-->
                                            <a href="/vistaNotas" class="btn colorDeBotonazul rounded-pill border-0">
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
                        <!---->
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/all.js') }}"></script>

    <script src="{{ asset('js/mascaraDeCarga/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('js/mascaraDeCarga/jquery.blockUI.js') }}"></script>

    <script src="{{ asset('js/mascaraDeCarga/mascara.js') }}"></script>


    <script src="{{ asset('js/controller_navbar.js') }}"></script>

</body>

</html>
