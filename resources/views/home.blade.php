@extends('layouts.plantilla')

@section('title','DISC - Departamento de Ingenieria de Sistemas y Computacion')

@section('content')
    <!-- component -->
<style>
    .w-70 {
      width: 20rem;
      }
  </style>

  <section class="blog text-gray-700 body-font font-source">
        <div class="container px-5 py-10 mx-auto">
          <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> ¡Bienvenido!</h1>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
            <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
              <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>

              <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">

                <div class="header-content inline-flex ">
                  <div class="">
                    <div class="" ></div>
                  </div>
                  <div class="category-title flex-1 text-sm font-bold">Cuerpo Académico</div>
                </div>
                <br><br>
                <div class="summary-post text-base text-justify">Los Académicos Con los que contamos.
                  <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><a href="{{route('academicos')}}">Ver Mas</a></button>
                </div>

              </div>
            </div>

            <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
              <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1543966888-7c1dc482a810?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>

              <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">

                <div class="header-content inline-flex ">
                  <div class="">
                    <div class=" " ></div>
                  </div>
                  <div class="category-title flex-1 text-sm font-bold"> Programas del Departamento</div>
                </div>
                <br><br>
                <div class="summary-post text-base text-justify">Revisa Nuestras Carreras.
                  <button class="bg-blue-100 text-blue-500 px-2 mt-4 block rounded p-2 text-sm"><a href="{{route('programas')}}">Ver Mas</a></button>
                </div>

              </div>
            </div>

            <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
              <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1590608897129-79da98d15969?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>

              <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">

                <div class="header-content inline-flex ">
                  <div class="">
                    <div class=" " ></div>
                  </div>
                  <div class="category-title flex-1 text-sm font-bold">Portal de Noticias</div>
                </div>
                <br><br>
                <div class="summary-post text-base text-justify">Las ultimas noticias de interés informático.
                  <button class="bg-blue-100 text-blue-500 px-2 mt-4 block rounded p-2 text-sm"><a href="{{route('noticias')}}">Ver Mas</a></button>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>

@endsection
