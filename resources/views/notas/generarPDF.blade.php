{{-- <!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos para el PDF */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        .nota-info {
            margin-bottom: 20px;
        }
        .nota-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Nota de Participación</h1>

    <div class="nota-info">
        <p><strong>Nombre:</strong> {{ $nota->nombreAlumnoNotas }}</p>
        <p><strong>Apellido Paterno:</strong> {{ $nota->apellidoPaternoNotas }}</p>
        <p><strong>Apellido Materno:</strong> {{ $nota->apellidoMaternoNotas }}</p>
        <p><strong>Número de Control:</strong> {{ $nota->noControlNotas }}</p>
        <p><strong>Carrera:</strong> {{ $nota->carreraNotas }}</p>
        <p><strong>Evento:</strong> {{ $nota->evento }}</p>
        <p><strong>Horas de Participación:</strong> {{ $nota->horas }}</p>
        <p><strong>Fecha:</strong> {{ $nota->fecha }}</p>
    </div>
</body>
</html> --}}


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Nota de Participacion</title>
</head>
<body>


    <div class="conatiner">
        <div class="row">
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <p><strong>Nombre:</strong> {{ $nota->nombreAlumnoNotas }}</p>
                    <p><strong>Apellido Paterno:</strong> {{ $nota->apellidoPaternoNotas }}</p>
                    <p><strong>Apellido Materno:</strong> {{ $nota->apellidoMaternoNotas }}</p>
                    <p><strong>Número de Control:</strong> {{ $nota->noControlNotas }}</p>
                    <p><strong>Carrera:</strong> {{ $nota->carreraNotas }}</p>
                    <p><strong>Evento:</strong> {{ $nota->evento }}</p>
                    <p><strong>Horas de Participación:</strong> {{ $nota->horas }} Horas</p>
                    <p><strong>Fecha:</strong> {{ $nota->fecha }}</p>
                    <p><strong>Periodo Escolar:</strong> {{ $nota->periodo }}</p>
                    <p><strong>Grupo:</strong> {{ $nota->grupo }}</p>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>