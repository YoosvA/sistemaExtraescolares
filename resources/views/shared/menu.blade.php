
<!-- nabvar para dispositivos moviles -->
<nav class="navbar navbar-expand-lg navbar-light bg-moles tipo-letra" id="nav-menu">
    <div class="container text-center">
        <a class="navbar-brand text-white" href="/"><img src="{{ asset('img/LOGO_TECNM_BLANCO.png') }}" width="30px" height="30px" alt="">
         <br>  Sistema ExtraEscolares</a>
        <button class="navbar-toggler position-relative" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <img src="{{ asset('img/IconoDeMenuNav.svg') }}" alt="">
            <div id="avisar"></div>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mt-4">
                <div class="">
                <li class="nav-item  mt-1 mb-1">
                        <a class="btn btn-moles btn-block" href="#DatosPersonalesDelAlumno">Datos Personales <br> Del Alumno</a>
                    </li>
                    <li class="nav-item  mt-1 mb-1">
                        <a class="btn btn-moles btn-block" href="#Creditos">Creditos</a>
                    </li>
                    <li class="nav-item  mt-1 mb-1">
                        <a class="btn btn-moles btn-block" href="#NotasDeParticipacion">Notas De <br> Participacion</a>
                    </li>
                    <li class="nav-item  mt-1 mb-1">
                        <a class="btn btn-moles btn-block" href="/agregarUsuario">Agregar Usuario</a>
                    </li>
                    <li class="nav-item  mt-1 mb-1">
                        <a class="btn btn-moles btn-block" href="{{ route('logout') }}">Cerrar Seccion</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>

<!-- sidemenu para computadoras -->
<div id="sidemenu" class="menu-collapsed tipo-letra">
    <div id="header">
        <div id="title"><h5 class="text-center">Bienvenido(a): {{ Auth::user()->user }}</h5></div>
        <div class="text-center" id="menu-btn">
            <img src="{{ asset('img/IconoDeMenuNav.svg') }}" alt="">
        </div>
    </div>
    <div id="profile">
        <div class="text-center" id="photo">
            <a href="#"><img src="{{ asset('img/LOGO_TECNM_BLANCO.png') }}"  title="Inicio"></a>
        </div>
        <div class="text-center" id="name">
            <div>
                <h2>Sistema <br> ExtraEscolares</h2>
                
               <span>

               </span>
            </div>
        </div>
    </div>
    <div id="menu-items">
        <div class="item mt-2 mb-2">
            <a href="#DatosPersonalesDelAlumno" title="Datos Personales Del Alumno">
                <div class="ico text-center">
                <i class="fa-solid fa-house"></i>
                </div>
                <div class="title">
                    <h4>Datos Personales <br> Del Alumno</h4>
                </div>
            </a>
        </div>
        <div class="item mt-2 mb-2">
            <a href="#Creditos" title="Creditos">
                <div class="ico text-center">
                <i class="fa-solid fa-shop"></i>
                </div>
                <div class="title">
                    <h4>Creditos</h4>
                </div>
            </a>
        </div>
        <div class="item mt-2 mb-2">
            <a href="#NotasDeParticipacion" title="Notas De Participacion">
                <div class="ico text-center">
                <i class="fa-solid fa-kitchen-set"></i>
                </div>
                <div class="title">
                    <h4>Notas De <br> Participacion</h4>
                </div>
            </a>
        </div>
        <div class="item mt-2 mb-2">
            <a href="/agregarUsuario" title="Informacion Empresa">
                <div class="ico text-center">
                <i class="fa-solid fa-circle-info"></i>
                </div>
                <div class="title">
                    <h4>Agregar Usuario</h4>
                </div>
            </a>
        </div>
        <div class="item mt-2 mb-2">
            <a href="{{ route('logout') }}" title="Quejas Servicio">
                <div class="ico text-center">
                <i class="fa-solid fa-paper-plane"></i>
                </div>
                <div class="title">
                    <h4>cerrar seccion</h4>
                </div>
            </a>
        </div>
        <div class="item mt-2 mb-2">
            
                <div class="ico text-center">
                <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <div class="title">
                    <p>______________________</p>
                    <h5 class="ms-4">Creative Code</h5>
                   
                </div>
        </div>
    </div>
</div>
