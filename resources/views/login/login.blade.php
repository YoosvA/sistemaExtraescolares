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
    <div class="container">
        <div class="row">
            <div class="col">
                <!--Primer Card Contenido Inicio-->
                <div
                    class="card position-absolute top-50 start-50 translate-middle shadow-lg bg-body rounded rounded border-0">
                    <div class="card-body">
                        <!--Contenido De Los 2 Card-->
                        <div class="row">
                            <div class="col-sm-6">
                                <!--Nota: - > Se Colocaron Algunos Estilos A Los Cards-->
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!--Contenido De Logo Tecnm Inicio-->
                                        <img src="{{ asset('img/Tecnm.png') }}" class="tamañoDeImgLogo img-flui"
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
                                            <h2>Sistema Extra Escolares</h2>
                                            <h4><img src="{{ asset('img/user.svg') }}" alt=""> Usuario</h4>
                                            <input type="text" class="form-control mt-2 mb-2" name="user"
                                                required>
                                            <h4><img src="{{ asset('img/password.svg') }}" alt="">
                                                Contraseña</label>
                                                <input type="password" class="form-control mt-2 mb-2" name="password"
                                                    id="password" required>
                                                <!--Parte De Boton De Mostrar Contraseña Inicio (Se Utilizo JS)-->
                                                <input type="checkbox" id="showPassword">
                                                <label for="showPassword">
                                                    <h5>Mostrar contraseña</h5>
                                                </label>
                                                <script>
                                                    const passwordInput = document.getElementById('password');
                                                    const showPasswordCheckbox = document.getElementById('showPassword');

                                                    showPasswordCheckbox.addEventListener('change', function() {
                                                        if (showPasswordCheckbox.checked) {
                                                            passwordInput.type = 'text';
                                                        } else {
                                                            passwordInput.type = 'password';
                                                        }
                                                    });
                                                </script>
                                                <!--Parte De Boton De Mostrar Contraseña Fin (Se Utilizo JS)-->
                                                <!--Contenido De Boton Color Azul Inicio-->
                                                <div class="text-center d-grid gap-2 col-6 mx-auto  mt-3 ">
                                                    <button class=" btn colorDeBoton rounded-pill ">
                                                        <h5 class="text-white">Entrar</h5>
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

    <script src="{{('js/mascaraDeCarga/jquery-3.2.1.min.js')}}"></script>
    <script src="{{('js/mascaraDeCarga/jquery.blockUI.js')}}"></script>
    <script src="{{('js/mascaraDeCarga/mascara.js')}}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <!--Contenido De Link De Js y Igualmente Contiene La Mascara De Carga Fin-->
</body>

</html>
