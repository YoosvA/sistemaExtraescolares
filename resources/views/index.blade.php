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

<body>
    <section class="sidebar">
        <!---->
        <br>
        <div class="nav-header">
            <img src="{{ asset('') }}" alt="">
            <p class="logo">Sistema ExtraEscolares</p>
            <i class="bx bx-menu btn-menu"></i>
        </div>
        <!---->
        <ul class="nav-links">
            <li>

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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dolore, nesciunt veniam in sunt sapiente
            repellat vero a sint dolor eveniet similique dignissimos. In, sed? Architecto temporibus non qui ipsam.
            Vel quod, harum mollitia cupiditate ex cumque natus iure eius dicta dolore porro optio minima eaque nam,
            debitis et aperiam doloribus itaque voluptate, architecto accusamus! A nulla tempore repellendus atque.
            Architecto dolorum facilis dolor cumque minus laudantium labore, corporis natus aut non accusamus iure? Fuga
            perferendis autem neque, dicta accusamus numquam beatae inventore quae quisquam perspiciatis accusantium
            minima tempore non?
            Veritatis, dolores vitae? Odio molestias accusamus iste sapiente similique doloremque maiores minima dolorum
            dicta eligendi odit itaque provident earum unde repellat eos omnis ducimus vitae, veritatis corrupti quia.
            Eaque, laudantium.
            Earum recusandae cum id, minima ratione incidunt optio? Neque dolorum incidunt distinctio. Alias, ducimus
            eveniet illo veritatis minima minus optio ipsam repellat. Odio fugiat sint, cumque placeat delectus aliquam
            cum.</p>
        <h2 id="NotasDeParticipacion">NotasDeParticipacion</h2>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit inventore
            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
            voluptas!
            Reiciendis culpa consequuntur corporis reprehenderit quaerat, aperiam nisi exercitationem a molestiae enim
            tenetur, assumenda placeat, libero facere natus provident? Dolorum officiis fugiat nobis unde soluta autem
            voluptatum quidem reiciendis aperiam?
            Labore sequi quas accusantium magni reprehenderit earum sint perspiciatis nesciunt quidem explicabo, quae
            voluptatum soluta ea illum eius iste magnam minus? Esse vero blanditiis, incidunt odit temporibus rerum
            atque qui!
            Saepe fugit ratione totam, mollitia consequuntur quam. Necessitatibus ratione fugit et minima deserunt,
            voluptatum culpa doloremque quo sapiente dignissimos quam aperiam. Unde dolorem exercitationem doloremque
            iure inventore, aperiam minus veniam!
            At sapiente placeat a, molestias ea repellat tempore deserunt dolores. Nulla corporis maxime qui
            perspiciatis assumenda dicta quibusdam distinctio, exercitationem repellat dolor itaque quae aperiam beatae,
            porro dolorem. Excepturi, expedita.</h1>
        <h2 id="Creditos">Creditos</h2>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit inventore
            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
            voluptas!
            Reiciendis culpa consequuntur corporis reprehenderit quaerat, aperiam nisi exercitationem a molestiae enim
            tenetur, assumenda placeat, libero facere natus provident? Dolorum officiis fugiat nobis unde soluta autem
            voluptatum quidem reiciendis aperiam?
            Labore sequi quas accusantium magni reprehenderit earum sint perspiciatis nesciunt quidem explicabo, quae
            voluptatum soluta ea illum eius iste magnam minus? Esse vero blanditiis, incidunt odit temporibus rerum
            atque qui!
            Saepe fugit ratione totam, mollitia consequuntur quam. Necessitatibus ratione fugit et minima deserunt,
            voluptatum culpa doloremque quo sapiente dignissimos quam aperiam. Unde dolorem exercitationem doloremque
            iure inventore, aperiam minus veniam!
            At sapiente placeat a, molestias ea repellat tempore deserunt dolores. Nulla corporis maxime qui
            perspiciatis assumenda dicta quibusdam distinctio, exercitationem repellat dolor itaque quae aperiam beatae,
            porro dolorem. Excepturi, expedita.</h1>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit inventore
            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
            voluptas!
            Reiciendis culpa consequuntur corporis reprehenderit quaerat, aperiam nisi exercitationem a molestiae enim
            tenetur, assumenda placeat, libero facere natus provident? Dolorum officiis fugiat nobis unde soluta autem
            voluptatum quidem reiciendis aperiam?
            Labore sequi quas accusantium magni reprehenderit earum sint perspiciatis nesciunt quidem explicabo, quae
            voluptatum soluta ea illum eius iste magnam minus? Esse vero blanditiis, incidunt odit temporibus rerum
            atque qui!
            Saepe fugit ratione totam, mollitia consequuntur quam. Necessitatibus ratione fugit et minima deserunt,
            voluptatum culpa doloremque quo sapiente dignissimos quam aperiam. Unde dolorem exercitationem doloremque
            iure inventore, aperiam minus veniam!
            At sapiente placeat a, molestias ea repellat tempore deserunt dolores. Nulla corporis maxime qui
            perspiciatis assumenda dicta quibusdam distinctio, exercitationem repellat dolor itaque quae aperiam beatae,
            porro dolorem. Excepturi, expedita.</h1>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit inventore
            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
            voluptas!
            Reiciendis culpa consequuntur corporis reprehenderit quaerat, aperiam nisi exercitationem a molestiae enim
            tenetur, assumenda placeat, libero facere natus provident? Dolorum officiis fugiat nobis unde soluta autem
            voluptatum quidem reiciendis aperiam?
            Labore sequi quas accusantium magni reprehenderit earum sint perspiciatis nesciunt quidem explicabo, quae
            voluptatum soluta ea illum eius iste magnam minus? Esse vero blanditiis, incidunt odit temporibus rerum
            atque qui!
            Saepe fugit ratione totam, mollitia consequuntur quam. Necessitatibus ratione fugit et minima deserunt,
            voluptatum culpa doloremque quo sapiente dignissimos quam aperiam. Unde dolorem exercitationem doloremque
            iure inventore, aperiam minus veniam!
            At sapiente placeat a, molestias ea repellat tempore deserunt dolores. Nulla corporis maxime qui
            perspiciatis assumenda dicta quibusdam distinctio, exercitationem repellat dolor itaque quae aperiam beatae,
            porro dolorem. Excepturi, expedita.</h1>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quos sequi expedita quo odit inventore
            neque quisquam praesentium! Eveniet aut mollitia quo vel commodi delectus, natus autem ipsa recusandae
            voluptas!
            Reiciendis culpa consequuntur corporis reprehenderit quaerat, aperiam nisi exercitationem a molestiae enim
            tenetur, assumenda placeat, libero facere natus provident? Dolorum officiis fugiat nobis unde soluta autem
            voluptatum quidem reiciendis aperiam?
            Labore sequi quas accusantium magni reprehenderit earum sint perspiciatis nesciunt quidem explicabo, quae
            voluptatum soluta ea illum eius iste magnam minus? Esse vero blanditiis, incidunt odit temporibus rerum
            atque qui!
            Saepe fugit ratione totam, mollitia consequuntur quam. Necessitatibus ratione fugit et minima deserunt,
            voluptatum culpa doloremque quo sapiente dignissimos quam aperiam. Unde dolorem exercitationem doloremque
            iure inventore, aperiam minus veniam!
            At sapiente placeat a, molestias ea repellat tempore deserunt dolores. Nulla corporis maxime qui
            perspiciatis assumenda dicta quibusdam distinctio, exercitationem repellat dolor itaque quae aperiam beatae,
            porro dolorem. Excepturi, expedita.</h1>
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
