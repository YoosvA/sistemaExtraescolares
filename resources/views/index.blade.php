<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ 'css/style.css' }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>{{ $titulo }}</title>
</head>

<body class="colorDeFondo">
    <section class="sidebar">
        <!---->
        <br>
        <div class="nav-header">
            <p class="logo">Sistema ExtraEscolares</p>
            <i class="bx bx-menu btn-menu"></i>
        </div>
        <!---->
        <ul class="nav-links">
            <li>
               <div class="text-center">
                <img src="{{ asset('img/LOGO_TECNM_BLANCO.png') }}" class="title tamañoDeImgLogo" alt="">
                <span class="tooltip"></span>
               </div>
            </li>
            <li>
                <a href="#DatosPersonales">

                    <span class="title">Datos Personales <br> Del Alumno</span>
                </a>
                <span class="tooltip">Datos Personales Del Alumno</span>
            </li>
            <li>
                <a href="#NotasDeParticipacion">
                    <span class="title">Notas De <br> Participacion ( Eventos )</span>
                </a>
                <span class="tooltip">Notas De <br> Participacion ( Eventos )</span>
            </li>
            <li>
                <a href="#Creditos">
                    <span class="title">Creditos</span>
                </a>
                <span class="tooltip">Creditos</span>
            </li>
            <li>
                <a href="/agregarUsuario">
                    <span class="title">Agregar Usuario</span>
                </a>
                <span class="tooltip">Agregar Usuario</span>
            </li>
            <li>
                <a href="{{ route('logout') }}">
                    <span class="title">Cerrar Seccion</span>
                </a>
                <span class="tooltip">Cerrar Seccion</span>
            </li>
        </ul>
        <div class="theme-wrapper">
            <i class="bx bxs-moon theme-icon"></i>
            <p>Dark Theme</p>
            <div class="theme-btn">
                <span class="theme-ball"></span>
            </div>
        </div>
    </section>


    <section class="home">
        <h2 id="DatosPersonales">DatosPersonales</h2>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum exercitationem dolorem sunt reprehenderit
            mollitia qui corrupti molestias ex vel porro quos, rerum esse ducimus. Ipsam provident dignissimos quia
            distinctio nam.</h4>

        <a href="/vistaAlumnos" class="btn btn-primary">Vista Datos</a>

        <h2 id="NotasDeParticipacion">NotasDeParticipacion</h2>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit inventore
            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
            voluptas!.
        </h1>

        <h2 id="Creditos">Creditos</h2>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit inventore
            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
            voluptas!
            <a href="/vistaCreditos" class="btn btn-primary">Creditos</a>
        </h1>
    </section>


    <script>
        const btn_menu = document.querySelector(".btn-menu");
        const side_bar = document.querySelector(".sidebar");

        btn_menu.addEventListener("click", function() {
            side_bar.classList.toggle("expand");
            changebtn();
        });

        function changebtn() {
            if (side_bar.classList.contains("expand")) {
                btn_menu.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                btn_menu.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }

        const btn_theme = document.querySelector(".theme-btn");
        const theme_ball = document.querySelector(".theme-ball");

        const localData = localStorage.getItem("theme");

        if (localData == null) {
            localStorage.setItem("theme", "light");
        }

        if (localData == "dark") {
            document.body.classList.add("dark-mode");
            theme_ball.classList.add("dark");
        } else if (localData == "light") {
            document.body.classList.remove("dark-mode");
            theme_ball.classList.remove("dark");
        }

        btn_theme.addEventListener("click", function() {
            document.body.classList.toggle("dark-mode");
            theme_ball.classList.toggle("dark");
            if (document.body.classList.contains("dark-mode")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }
        });
    </script>
</body>

</html>
