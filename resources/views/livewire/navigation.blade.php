<div>
    <nav class="bg-banner-menu w-screen font-source" x-data="{open:false}">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                        <!-- Mobile menu button-->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button x-on:click="open=true" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed. -->
                        <!--
                        Heroicon name: menu

                        Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <!--
                        Heroicon name: x

                        Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-0 text-center items-center">
                        <div class="">
                            <div class="dropdown inline-block relative">
                                <a href="{{route('home')}}">
                                    <button class="text-white hover:bg-banner-opcion px-3 py-2 rounded-md text-sm font-medium">
                                        <span>Inicio</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown inline-block relative">
                                <a href="{{route('historia')}}">
                                    <button class="text-white hover:bg-banner-opcion px-3 py-2 rounded-md text-sm font-medium">
                                        <span>¿Quiénes Somos?</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown inline-block relative">
                                <a href="{{route('academicos')}}">
                                    <button class="text-white hover:bg-banner-opcion px-4 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                        <span class="mr-1">Funcionarios del Departamento</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="dropdown-menu absolute hidden text-gray-700">
                                    <li class=""><a class="rounded-t bg-banner text-white hover:bg-banner-opcion px-3 py-2 block whitespace-no-wrap" href="{{route('academicos.oficial')}}">Académicos de Planta Oficial</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion px-3 py-2 block whitespace-no-wrap" href="{{route('academicos.especial')}}">Académicos de Planta Especial</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion px-3 py-2 block whitespace-no-wrap" href="{{route('academicos.temporal')}}">Académicos de Planta Temporal</a></li>
                                    <li class=""><a class="rounded-b bg-banner text-white hover:bg-banner-opcion px-3 py-2 block whitespace-no-wrap" href="{{route('academicos.apoyo')}}">Personal de Apoyo a la Academia</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown inline-block relative">
                                <a href="{{route('programas')}}">
                                    <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                        <span class="mr-1">Programas del Departamento</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="dropdown-menu absolute hidden text-gray-700">
                                    <li class=""><a class="rounded-t bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('programas.pregrado')}}">Programas de Pre-Grado</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('programas.postgrado')}}">Programas de Post-Grado</a></li>
                                    <li class=""><a class="rounded-b bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('programas.posttitulo')}}">Programas de Post-Titulo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown inline-block relative">
                                <a href="{{route('documentos')}}">
                                    <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                        <span class="mr-1">Documentos de Interés</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="dropdown-menu absolute hidden text-gray-700">
                                    <li class=""><a class="rounded-t bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('documentos.reacreditacion')}}">Reacreditación</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('documentos.plan')}}">Plan Estratégico</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('documentos.reglamento')}}">Reglamento</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('documentos.libro')}}">Libro de Carreras</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('documentos.titulacion')}}">Titulación</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('documentos.practica')}}">Practicas</a></li>
                                    <li class=""><a class="rounded-b bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('documentos.otro')}}">Otros Documentos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown inline-block relative">
                                <a href="{{route('investigacion')}}">
                                    <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium inline-flex items-center">
                                        <span class="mr-1">Investigación</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="dropdown-menu absolute hidden text-gray-700">
                                    <li class=""><a class="rounded-t bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('investigacion.listaProyectos')}}">Todos los Proyectos</a></li>
                                    <li class=""><a class="bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('investigacion.listaPublicaciones')}}">Todas las Publicaciones</a></li>
                                    <li class=""><a class="rounded-b bg-banner text-white hover:bg-banner-opcion  px-3 py-2 block whitespace-no-wrap" href="{{route('investigacion')}}">Listado por Académico</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="dropdown inline-block relative">
                                <a href="{{route('noticias')}}">
                                    <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                        <span>Portal de Noticias</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @auth
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Profile dropdown -->
                <div class="ml-3 relative" x-data="{ open: false }">
                    <div>
                        <button x-on:click="open = true" class="bg-blue-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
                        </button>
                    </div>
                    <!--
                    Profile dropdown panel, show/hide based on dropdown state.

                    Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div x-show="open" x-on:click.away="open=false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-blue-700 hover:bg-blue-100" role="menuitem">Mi Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-blue-700 hover:bg-blue-100" role="menuitem" onclick="event.preventDefault();this.closest('form').submit();">Cerrar Sesion</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="dropdown inline-block relative">
                    <a href="{{route('register')}}">
                        <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                            <span>Registrarse</span>
                        </button>
                    </a>
                </div>
            </div>
            @else
                    <div class="">
                        <div class="dropdown inline-block relative">
                            <a href="{{route('login')}}">
                                <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                    <span>Entrar</span>
                                </button>
                            </a>
                        </div>
                    </div>

            @endauth

        </div>
        </div>

        <!--
        Mobile menu, toggle classes based on menu state.

        Menu open: "block", Menu closed: "hidden"
        -->
        <div class="sm:hidden" x-show="open" x-on:click.away="open=false">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <div class="">
                    <div class="dropdown inline-block relative">
                        <a href="{{route('home')}}">
                            <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                <span>Inicio</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="dropdown inline-block relative">
                        <a href="{{route('historia')}}">
                            <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                <span>¿Quienes Somos?</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="dropdown inline-block relative">
                        <a href="{{route('academicos')}}">
                            <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                <span>Funcionarios del Departamento</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="dropdown inline-block relative">
                        <a href="{{route('programas')}}">
                            <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                <span>Programas del Departamento</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="dropdown inline-block relative">
                        <a href="{{route('documentos')}}">
                            <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                <span>Documentos de Interes</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="dropdown inline-block relative">
                        <a href="{{route('investigacion')}}">
                            <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                <span>Investigacion</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="dropdown inline-block relative">
                        <a href="{{route('noticias')}}">
                            <button class="text-white hover:bg-banner-opcion  px-3 py-2 rounded-md text-sm font-medium">
                                <span>Portal de Noticias</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>
