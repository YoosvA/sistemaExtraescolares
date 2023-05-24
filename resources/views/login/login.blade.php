<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
    <title>{{ $titulo }}</title>
</head>

<body class="color">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card position-absolute top-50 start-50 translate-middle colorNegro border-0 ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!--Titulo-->

                                        <div class="col text-center">
                                            <img src="{{ asset('img/Logo.png') }}"
                                                class="tamañoDeImgLogo rounded-circle img-thumbnail" alt="">
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente text-white">
                                    <div class="card-body">
                                        <form action="{{ route('logear') }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <h1 class="text-center">Sistema ExtraEscolares</h1>
                                            <h3><img src="{{ asset('img/user.svg') }}" alt=""> Usuario</h3>
                                            <input type="text" class="form-control text-center" name="user" required>
                                            <br>
                                            <h3><img src="{{ asset('img/password.svg') }}" alt="">
                                                Contraseña</label>
                                                <input type="password" class="form-control text-center" name="password"
                                                    id="password" required>
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
                                               
                                            <div class="text-center  mt-3 ">
                                                    <button class="btn colorDeBoton rounded-circle"> <img src="{{ asset('img/entrar.svg') }}" alt=""> <br> Entrar</button>
                                                </div>
                                                <hr>
                                            <h5 class="text-center mt-2">Creative Code</h5>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{('js/mascaraDeCarga/jquery-3.2.1.min.js')}}"></script>
    <script src="{{('js/mascaraDeCarga/jquery.blockUI.js')}}"></script>
    <script src="{{('js/mascaraDeCarga/mascara.js')}}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
