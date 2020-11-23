<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    <!-- nav -->
    <header>


        <h1>Departamento de Ingenieria de Sistemas y Computacion</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Pagina Principal</a></li>
                <li><a href="{{route('historia')}}">Historia del Departamento</a></li>
                <li><a href="{{route('programas')}}">Programas del Departamento</a></li>
                <li><a href="{{route('academicos')}}">Academicos del Departamento</a></li>
                <li><a href="{{route('documentos')}}">Documentos de Interes</a></li>
                <li><a href="{{route('noticias')}}">Portal de Noticias</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <!-- footer -->
    <!-- script -->
</body>
</html>
