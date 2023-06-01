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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Nota de Participacion</title>
</head>

<body>


    <div class="conatiner mt-4">
        <div class="row">
            <div class="col text-center">
                <div>
                    <h3>
                        <b>INSTITUTO TECNOLÓGICO DE MILPA ALTA ll
                        </b>
                    </h3>
                </div>
            </div>
            <div class="col text-center">
                <div>
                    <h3>
                        <b>DEPARTAMENTO DE ACTIVIDADES <br> EXTRAESCOLARES
                    </b>
                </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <table class="table border border-dark text-center">
                    <thead>
                        <tr>
                            <th class="border border-dark">Numero de Control:</th>
                            <th class="border border-dark">Periodo Escolar:</th>
                            <th class="border border-dark">Nombre:</th>           
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td class="border border-dark">{{ $nota->noControlNotas }}</td>
                            <td class="border border-dark">{{ $nota->periodo }}</td>
                            <td class="border border-dark">{{ $nota->apellidoPaternoNotas }} {{ $nota->apellidoMaternoNotas }} {{ $nota->nombreAlumnoNotas }}</td>
                            
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col">
                <table class="table border border-dark text-center">
                    <thead>
                        <tr>
                            <th class="border border-dark">Actividad:</th>
                            <th class="border border-dark">Fecha:</th>
                            <th class="border border-dark">Grupo:</th>
                            <th class="border border-dark">Hrs. Acreditadas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-dark">{{ $nota->evento }}</td>
                            <td class="border border-dark">{{ $nota->fecha }}</td>
                            <td class="border border-dark">{{ $nota->grupo }}</td>
                            <td class="border border-dark">{{ $nota->horas }} Horas</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table border border-dark text-center">
                    <thead>
                        <tr>
                            <th class="border border-dark">Carrera:</th>
                            <td class="border border-dark">{{ $nota->carreraNotas }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <small><b>NOTA: </b>EL ALUMNO DEBE DE CONSERVAR ESTE DOCUMENTO Y ENTREGARLO AL DEPARTAMENTO DE
                    EXTRAESCOLARES AL COMPLETAR UN CREDITO EQUIVALENTE A 20 HRS.
                    <br><br>
                    ESTE DOCUMENTO SERÁ JUSTIFICACIÓN PARA SUS ACTIVIDADES EXTRAESCOLARES EN CADA UNA DE SUS
                    ASIGNATURAS.
                    <br><br>
                    PARA QUE TENGA VALIDEZ ESTE DOCUMENTO DEBE TENER FIRMA Y SELLO DEL JEFE DE DEPARTAMENTO
                    QUE PROPORCIONO EL APOYO.
                </small>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <small><b>ING. ROLDAN AQUINO SEGURA</b>
                <br>JEFE DEL DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES
                <br><br>
                ___________________________
            </small>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
