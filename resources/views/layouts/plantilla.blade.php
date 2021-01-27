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
                <img class="float-left mx-5 my-10" src="http://www.disc.ucn.cl/wp-content/themes/disc/img/logo-ucn.png" width="300" height="70" scale="0">
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

<!-- component -->
<footer class="bg-bottom">
    <div class="w-full bg-banner">
        <div class="flex flex-wrap text-center text-white">

            <!-- ABOUT COLUMN -->

            <div class="w-full p-5 md:w-1/3 md:text-left">
                <div class="my-6 ml-3 text-xl font-semibold"> </div>
                <p><img class="alignleft wp-image-506 size-full"
                        src="http://www.disc.ucn.cl/wp-content/uploads/2017/10/Logo-CNA-Web.png" alt="" width="922"
                        height="184"></p>
            </div>

            <!-- CONTACTS COLUMN -->

            <div class="w-full p-5 md:w-1/3">
                {{-- <div class="my-6 text-xl font-semibold">CONTACT US</div>
                --}}
                {{-- <p class="mt-8 text-gray-400">
                    A108 Adam Street <br>
                    New York, NY 535022 <br>
                    United States <br>
                    <strong>Phone:</strong> +1 5589 55488 55 <br>
                    <strong>Email:</strong> info@funtravel.com
                </p> --}}
                <p class="mt-8 text-white">Departamento de Ingeniería de Sistemas y Computación
                    <br>Fono: +56 55 2355139
                    <br>Angamos 0610, Pabellón Y-1
                    <br>Antofagasta, Chile.
                </p>
            </div>


            <div class="w-full p-5 md:w-1/3">

            </div>
        </div>
    </div>
</footer>

</html>
