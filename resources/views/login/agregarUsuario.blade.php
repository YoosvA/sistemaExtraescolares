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
                <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="text-center mt-4">Agregar Usuario</h5>
                        <form action="/agregarNuevo" method="post" class="mt-3">
                            @csrf
                            @method('POST')
                            <label for="name">nombre</label>
                            <input type="text" class="form-control" name="name" id="name" required> 
                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <label for="user">Usuario</label>
                            <input type="text" class="form-control" name="user" id="user" required>
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <button class="btn btn-primary mt-3">Guardar</button>
                            <a href="/" class="btn btn-success mt-3">regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>