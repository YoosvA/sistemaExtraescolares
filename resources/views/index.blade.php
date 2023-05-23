<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Document</title>
</head>
<body>
    <div class="conatiner">
        <div class="row">
            <div class="col">
                
                <a class="btn btn-danger"  href="{{ route ('logout')}}"> Cerrar Sesión</a>

                <h1>Pagina principal</h1>
            </div>
        </div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>