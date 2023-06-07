<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos Que Ocupamos Inicio-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('librerias/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
    <title>{{ $titulo }}</title>
</head>
<!--Se Coloco El Tipo De Letra Global En El Diseño Del Login-->

<body class="TipoDeLetraDeLogint">
    <!--Se Añadio Una Img De Fondo-->
    <img src="img/imgFondoLogin.svg" class="img-fluid" alt="">
    <!--Se Añadio Una Img De Fondo-->
    @include('sweetalert::alert')
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Primer Card Contenido Inicio-->
                <div
                    class="card position-absolute top-50 start-50 translate-middle shadow-lg bg-body rounded rounded border-0 rounded-5">
                    <div class="card-body">
                        <!--Contenido De Los 2 Card-->
                        <div class="row">
                            <div class="col-sm-6">
                                <!--Nota: - > Se Colocaron Algunos Estilos A Los Cards-->
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!--Contenido De Logo Tecnm Inicio-->
                                        <img src="{{ asset('img/Tecnm.png') }}" class="tamañoDeImgLogo img-fluid"
                                            alt="">
                                        <!--Contenido De Logo Tecnm Fin-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!--Contenido De Input (User Y Password) Inicio-->
                                        <form action="{{ route('logear') }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <h1 class="text-center">Sistema Extraescolares</h1>
                                            <h4 class="ms-3"><i class="fas fa-user"></i> Usuario</h4>
                                            <input type="text"
                                                class="form-control text-center rounded-pill mt-2 mb-2" name="user"
                                                required placeholder="Usuario" aria-label="Usuario">
                                            <h4 class="ms-3 mt-3"><i class="fas fa-key"></i> Contraseña</h4>
                                            <input type="password"
                                                class="form-control text-center rounded-pill mt-2 mb-2" name="password"
                                                id="password" required placeholder="Contraseña"
                                                aria-label="Contraseña">
                                            <!--Parte De Boton De Mostrar Contraseña Inicio (Se Utilizo JS)-->
                                            <input type="checkbox" id="showPasswordToggle" class="toggle-checkbox">
                                            <label for="showPasswordToggle" class="toggle-label">
                                                <div class="toggle-inner"></div>
                                                <div class="toggle-switch"></div>
                                            </label>

                                            <script>
                                                const passwordInput = document.getElementById('password');
                                                const showPasswordToggle = document.getElementById('showPasswordToggle');

                                                showPasswordToggle.addEventListener('change', function() {
                                                    if (showPasswordToggle.checked) {
                                                        passwordInput.type = 'text';
                                                    } else {
                                                        passwordInput.type = 'password';
                                                    }
                                                });
                                            </script>

                                            <style>
                                                .toggle-checkbox {
                                                    display: none;
                                                }

                                                .toggle-label {
                                                    display: inline-block;
                                                    width: 50px;
                                                    height: 25px;
                                                    background-color: #ccc;
                                                    border-radius: 15px;
                                                    position: relative;
                                                    cursor: pointer;
                                                }

                                                .toggle-inner {
                                                    width: 20px;
                                                    height: 20px;
                                                    background-color: #fff;
                                                    border-radius: 50%;
                                                    position: absolute;
                                                    top: 2.5px;
                                                    left: 2.5px;
                                                    transition: transform 0.3s ease;
                                                }

                                                .toggle-switch {
                                                    width: 20px;
                                                    height: 20px;
                                                    background-color: #aaa;
                                                    border-radius: 50%;
                                                    position: absolute;
                                                    top: 2.5px;
                                                    left: 27.5px;
                                                    transition: background-color 0.3s ease;
                                                }

                                                .toggle-checkbox:checked+.toggle-label .toggle-inner {
                                                    transform: translateX(25px);
                                                }

                                                .toggle-checkbox:checked+.toggle-label .toggle-switch {
                                                    background-color: #0b0862;
                                                }
                                            </style>


                                            <!--Parte De Boton De Mostrar Contraseña Fin (Se Utilizo JS)-->
                                            <!--Contenido De Boton Color Azul Inicio-->
                                            <div class="text-center d-grid gap-2 col-6 mx-auto  mt-3 ">
                                                <button class="btn guardarBoton rounded-pill">
                                                    <h5 class="text-white"><i class="fas fa-sign-in-alt"></i> Ingresar
                                                    </h5>
                                                </button>
                                            </div>
                                            <!--Contenido De Boton Color Azul Fin-->
                                            <hr>
                                            <!--Nota: - > Nombre De Equipo-->
                                            <h5 class="text-center mt-2">Creative Code</h5>
                                        </form>
                                        <!--Contenido De Input (User Y Password) Fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contenido De Los 2 Card-->
                    </div>
                </div>
                <!--Primer Card Contenido Fin-->
            </div>
        </div>
    </div>
    <!--Contenido De Link De Js y Igualmente Contiene La Mascara De Carga Inicio-->
    <script src="{{ 'js/mascaraDeCarga/jquery-3.2.1.min.js' }}"></script>
    <script src="{{ 'js/mascaraDeCarga/jquery.blockUI.js' }}"></script>
    <script src="{{ 'js/mascaraDeCarga/mascara.js' }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <!--Contenido De Link De Js y Igualmente Contiene La Mascara De Carga Fin-->
</body>

</html>
