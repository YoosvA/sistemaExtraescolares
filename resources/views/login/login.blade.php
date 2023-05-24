<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
    <title>{{ $titulo }}</title>
</head>

<body class="color tipoLetra">
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="card position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body rounded border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <!--Titulo-->
                                        <h1 class="text-center">Sistema Extra Escolares</h1>
                                        <div class="col text-center">
                                            <img src="{{ asset('img/LogoITMA.png') }}" class="tamañoDeImgLogo" alt="">
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border-0 colorTransparente">
                                    <div class="card-body">
                                        <form action="{{ route('logear') }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <h3>Usuario</h3>
                                            <input type="text" class="form-control" name="user" required>
                                            <h3>Contraseña</label>
                                            <input type="password" class="form-control" name="password" id="password" required>
                                            <input type="checkbox" id="showPassword">
                                            <label for="showPassword"><h5>Mostrar contraseña</h5></label>
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
                                            <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                                <button class="btn colorDeBoton">Entrar</button>
                                            </div>
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
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
