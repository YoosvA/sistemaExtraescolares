<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{$titulo}}</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">

                    <div class="card position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body rounded border-0">
                        <div class="card-body">
                           <div class="row">
                            <div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                <!--Titulo-->
                                <h1>Sistema Extra Excolares</h1>
                                <!---->
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('logear')}}" method="post">
                                        @csrf
                                        @method('POST')
                                        <label for="name">Nombre Completo</label>
                                        <input type="text" class="form-control" name="name" required>
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                        <label for="user">Usuario</label>
                                        <input type="text" class="form-control" name="user" required>
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" name="password" required>
                                        <button class="btn btn-primary mt-3">Entrar</button>
                                    </form>
                                    <div class="mt-2">
                                        <a href="/agregarUsuario">Agregar Usuario</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>

                           <!---->
                           
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>