<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .imagen{
            background-image: url("{{asset('img/depto-y1-300x169.jpg')}}");
            height: 196px;
            width: 300px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


    <!-- favicon -->
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<header>
    <div class="container">
        <div class="w-screen h-40 bg-banner">
            <a href="http://www.ucn.cl" target="_blank">
                <img class="float-left mx-5 my-10 sm:mx-auto sm:w-30" src="http://www.disc.ucn.cl/wp-content/themes/disc/img/logo-ucn.png" width="300" height="70" scale="0">
            </a>
            <h1 class="text-2xl text-gray-300 text-right px-24 py-8 font-source"><a href="{{route('home')}}">Departamento de Ingeniería de <br>Sistemas y Computación</a></h1>
        </div>
    </div>
</header>
@livewire('navigation')
</head>
<body>
    <!-- header -->
    <!-- nav -->
    @yield('content')
    <!-- footer -->
    <!-- script -->
    @yield('js')
</body>

</html>
