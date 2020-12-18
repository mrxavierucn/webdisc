@extends('layouts.plantilla')

@section('title','Investigacion')

@section('content')

<h1>Area de Investigacion</h1>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Nombre</th>
                <th class="border border-black bg-cool-gray-200">Proyecto</th>
                <th class="border border-black bg-cool-gray-200">Publicaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($academicos as $academico)
                <tr>
                    <td class="border border-black">{{$academico->nombre}}</td>
                    <td class="hover:underline border border-black"><a href="{{route('investigacion.showProyectos',$academico->id)}}">Lista de Proyectos</a></td>
                    <td class="hover:underline border border-black"><a href="{{route('investigacion.showPublicaciones',$academico->id)}}">Lista de Publicaciones</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$academicos->links()}}
<li class="hover:underline px-2"><a href="{{route('investigacion.listaProyectos')}}">Mostrar todos los Proyectos</a></li>
<li class="hover:underline px-2"><a href="{{route('investigacion.listaPublicaciones')}}">Mostrar todas las Publicaciones</a></li>
@endsection
