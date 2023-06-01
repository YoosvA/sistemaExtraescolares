<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Oficio de Liberación</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center"><b>CONSTANCIA DE CUMPLIMIENTO DE ACTIVIDAD CULTURAL Y/O DEPORTIVA</b></h2>
                <br><br>
                <small>
                    <b>ELVIA GARCIA ROMERO <br> JEFE(A) DEL DEPARTAMENTO DE SERVICIOS ESCOLARES <br>PRESENTE
                    </b>
                </small>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <small>
                        El que suscribe <b><u>AQUINO SEGURA ROLDAN</u></b>, por este medio se permite hacer de su
                        conocimiento
                        que el(la) estudiante <b><u>{{ $oficioLiberacion->nombreEstudiante }}
                                {{ $oficioLiberacion->apellidoPatEstudiante }}
                                {{ $oficioLiberacion->apellidoMatEstudiante }}</u></b> con el número de control
                        <b><u>{{ $oficioLiberacion->noControlEstudiante }}</u></b>
                        de la carrera de <b><u>{{ $oficioLiberacion->carreraEstudiante }}</u></b> ha cumplido su
                        actividad <b><u>{{ $oficioLiberacion->creditoEstudiante }}</u></b>
                        con el nivel de desempeño <b><u>EXCELENTE</u></b> y un valor númerico de <b><u>4</u></b> durante
                        el periodo escolar
                        <b><u>{{ $oficioLiberacion->periodoEstudiante }}</u></b> con un valor curricular de 1 credito.
                    </small>
                </div>
                <div class="col mt-2">
                    <small>
                        Se extiende la presente en la CIUDAD DE MÉXICO en el dia {{ $oficioLiberacion->created_at }}.
                    </small>
                </div>

                <div class="col mt-4 text-center">
                    <small><b>ATENTAMENTE</b></small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 text-start">
                <div class="align-middle">
                    _____________________________
                    <br>
                    <small>
                        ING. AQUINO SEGURA ROLDAN
                        <br>
                        Nombre y firma del(de la) profesor(a)
                        <br>
                        responsable
                    </small>
                </div>
            </div>
            <div class="col-6 text-end">
                <div class="align-middle">
                    _____________________________
                    <br>
                    <small>
                        ING. AQUINO SEGURA ROLDAN
                        <br>
                        Jefe(a) del Depto. de Actividades Extraescolares
                    </small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
