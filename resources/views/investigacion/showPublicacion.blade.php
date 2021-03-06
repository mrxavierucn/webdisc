@extends('layouts.plantilla')

@section('title','$publicacion->nombre')

@section('content')

<h1>Publicacion</h1>
<br>
<div class="bg-gray-200  shadow overflow-hidden sm:rounded-lg font-source">
    <div class="px-4 py-5 sm:px-6 border border-gray-200">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$publicacion->nombre}}
        </h3>
    </div>
    <div class="border-t border-gray-200">
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Traducción:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$publicacion->traduccion}}
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Revista:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$publicacion->revista}}
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Año:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$publicacion->anio}}
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Paginas:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$publicacion->primera_pagina}}-{{$publicacion->ultima_pagina}}
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Link:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <a href="{{$publicacion->link}}" target="_blank">{{$publicacion->link}}</a>

                </dd>
            </div>
            @if ($academicos->count())
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Co-autores del Departamento:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    Nombre:
                </dd>
            </div>
            @foreach ($academicos as $academico)
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">

                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>{{$academico->nombre}}</p>
                </dd>
            </div>
            @endforeach
            @else
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Sin Co-autores del Departamento
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                </dd>
            </div>
            @endif
            @if ($publicacion->externo)
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Co-autores Externos:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <p style="white-space: pre-line">{{$publicacion->externo}}</p>


                </dd>
            </div>
            @else
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Sin Co-autores externos
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                </dd>
            </div>
            @endif
            @auth
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        <a href="{{route('investigacion.editPublicacion',$publicacion)}}">Modificar Publicacion/Co-autores Exteros</a>
                        <br>
                        <a href="{{route('investigacion.editColaboradoresPublicacion',$publicacion)}}">Cambiar Co-autores del Departamento</a>
                        <form action="{{route('investigacion.destroyPublicacion',$publicacion)}}" METHOD="POST">
                            @csrf
                            @method('delete')
                            <button class="font-semibold" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar esta publicacion?')">Eliminar Publicación</button>
                        </form>
                    </dt>
                </div>
            @endauth
        </dl>
    </div>
</div>
<br>
@endsection
