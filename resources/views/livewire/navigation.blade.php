<div>
    <nav class="w-screen bg-banner-menu font-source" x-data="{open:false}">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                        <!-- Mobile menu button-->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button x-on:click="open=true" class="inline-flex items-center justify-center p-2 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed. -->
                        <!--
                        Heroicon name: menu

                        Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <!--
                        Heroicon name: x

                        Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">

                <div class="hidden sm:block sm:ml-6">
                    <div class="flex items-center space-x-0 text-center">
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <a href="{{route('home')}}">
                                    <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                        <span>Inicio</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <a href="{{route('historia')}}">
                                    <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                        <span>¿Quiénes Somos?</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <a href="{{route('academicos')}}">
                                    <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                        <span class="mr-1">Funcionarios del Departamento</span>
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="absolute hidden text-gray-700 dropdown-menu">
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-t bg-banner hover:bg-banner-opcion" href="{{route('academicos.oficial')}}">Académicos de Planta Oficial</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('academicos.especial')}}">Académicos de Planta Especial</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('academicos.temporal')}}">Académicos de Planta Temporal</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-b bg-banner hover:bg-banner-opcion" href="{{route('academicos.apoyo')}}">Personal de Apoyo a la Academia</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <a href="{{route('programas')}}">
                                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                        <span class="mr-1">Programas del Departamento</span>
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="absolute hidden text-gray-700 dropdown-menu">
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-t bg-banner hover:bg-banner-opcion" href="{{route('programas.pregrado')}}">Programas de Pre-Grado</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('programas.postgrado')}}">Programas de Post-Grado</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-b bg-banner hover:bg-banner-opcion" href="{{route('programas.posttitulo')}}">Programas de Post-Titulo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <a href="{{route('documentos')}}">
                                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                        <span class="mr-1">Documentos de Interés</span>
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="absolute hidden text-gray-700 dropdown-menu">
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-t bg-banner hover:bg-banner-opcion" href="{{route('documentos.reacreditacion')}}">Reacreditación</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('documentos.plan')}}">Plan Estratégico</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('documentos.reglamento')}}">Reglamento</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('documentos.libro')}}">Libro de Carreras</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('documentos.titulacion')}}">Titulación</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('documentos.practica')}}">Practicas</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-b bg-banner hover:bg-banner-opcion" href="{{route('documentos.otro')}}">Otros Documentos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <a href="{{route('investigacion')}}">
                                    <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                        <span class="mr-1">Investigación</span>
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                </a>
                                <ul class="absolute hidden text-gray-700 dropdown-menu">
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-t bg-banner hover:bg-banner-opcion" href="{{route('investigacion.listaProyectos')}}">Todos los Proyectos</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="{{route('investigacion.listaPublicaciones')}}">Todas las Publicaciones</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-b bg-banner hover:bg-banner-opcion" href="{{route('investigacion')}}">Listado por Académico</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <a href="{{route('noticias')}}">
                                    <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                        <span>Portal de Noticias</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            <div class="relative inline-block dropdown">
                                <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                    <span class="mr-1">Enlaces Externos</span>
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                </button>
                                <ul class="absolute hidden text-gray-700 dropdown-menu">
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-t bg-banner hover:bg-banner-opcion" href="http://webmagister.test" target="_blank">Sistema Magister</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap bg-banner hover:bg-banner-opcion" href="http://localhost:3000/" target="_blank">Sistema de Actas</a></li>
                                    <li class=""><a class="block px-3 py-2 text-white whitespace-no-wrap rounded-b bg-banner hover:bg-banner-opcion" href="http://vinculacionvcm.test/login" target="_blank">Vinculación con el medio</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @auth
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Profile dropdown -->
                <div class="relative ml-3" x-data="{ open: false }">
                    <div>
                        <button x-on:click="open = true" class="flex text-sm bg-blue-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
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
                    <div x-show="open" x-on:click.away="open=false" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-blue-700 hover:bg-blue-100" role="menuitem">Mi Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-blue-700 hover:bg-blue-100" role="menuitem" onclick="event.preventDefault();this.closest('form').submit();">Cerrar Sesion</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="relative inline-block dropdown">
                    <a href="{{route('register')}}">
                        <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                            <span>Registrar Usuario</span>
                        </button>
                    </a>
                </div>
            </div>
            @else
                    <div class="">
                        <div class="relative inline-block dropdown">
                            <a href="{{route('login')}}">
                                <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
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
                    <div class="relative inline-block dropdown">
                        <a href="{{route('home')}}">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Inicio</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="{{route('historia')}}">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>¿Quienes Somos?</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="{{route('academicos')}}">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Funcionarios del Departamento</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="{{route('programas')}}">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Programas del Departamento</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="{{route('documentos')}}">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Documentos de Interes</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="{{route('investigacion')}}">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Investigacion</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="{{route('noticias')}}">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Portal de Noticias</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="http://webmagister.test" target="_blank">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Sistema Magister</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="http://localhost:3000/" target="_blank">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Sistema de Actas</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="">
                    <div class="relative inline-block dropdown">
                        <a href="http://vinculacionvcm.test/login" target="_blank">
                            <button class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-banner-opcion">
                                <span>Vinculación con el Medio</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>
