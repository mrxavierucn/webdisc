@extends('layouts.plantilla')

@section('title','Publicacion')

@section('content')

<h1>Publicacion</h1>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Nombre</th>
                @if ($publicacion->traduccion)
                    <th class="border border-black bg-cool-gray-200">Traduccion</th>
                @endif
                <th class="border border-black bg-cool-gray-200">Revista</th>
                <th class="border border-black bg-cool-gray-200">Año</th>
                <th class="border border-black bg-cool-gray-200">Paginas</th>
                <th class="border border-black bg-cool-gray-200">Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-black">{{$publicacion->nombre}}</td>
                @if ($publicacion->traduccion)
                    <td class="border border-black">{{$publicacion->traduccion}}</td>
                @endif
                <td class="border border-black">{{$publicacion->revista}}</td>
                <td class="border border-black">{{$publicacion->anio}}</td>
                <td class="border border-black">{{$publicacion->primera_pagina}}-{{$publicacion->ultima_pagina}}</td>
                <td class="hover:underline border border-black"><a href="{{$publicacion->link}}">{{$publicacion->link}}</a></td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Colaboradores</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($academicos as $academico)
                    <tr>
                        <td class="border border-black">{{$academico->nombre}}</td>
                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
<br>
@auth
<button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2"><a href="{{route('investigacion.editPublicacion',$publicacion)}}">Modificar Publicacion</a></button>
<br>
<button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2"><a href="{{route('investigacion.editColaboradoresPublicacion',$publicacion)}}">Cambiar Colaboradores</a></button>
<br>
<form action="{{route('investigacion.destroyPublicacion',$publicacion)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2" onclick="return confirm('¿Esta seguro que desea eliminar esta publicacion?')" type="submit">Eliminar Publicacion</button>
</form>
@endauth
@endsection
