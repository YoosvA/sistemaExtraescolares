<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    {{-- <link rel="stylesheet" href="{{ 'css/all.css' }}"> --}}

    <title>{{ $titulo }}</title>
</head>

<body class="colorDeFondo">


    @include('shared/menu')

    @yield('contenido')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }} "></script>
    <script src="{{ asset('js/controller_navbar.js') }}"></script>
    <script src="{{ asset('js/mascaraDeCarga/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('js/mascaraDeCarga/mascara.js') }}"></script>
    {{-- <script src="{{ asset('js/all.js') }}"></script> --}}
</body>

</html>
