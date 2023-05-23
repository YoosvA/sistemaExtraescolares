<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{$titulo}}</title>
</head>
<body style="background-image: url('img/pichon.png')">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center position-absolute top-50 start-50 translate-middle">
                    <div class="card" style="width: 20rem;" id="border">
                        <div class="card-body">
                            <h4>{{$titulo}}</h4>
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
        </div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>