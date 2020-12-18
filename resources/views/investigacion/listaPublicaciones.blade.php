@extends('layouts.plantilla')

@section('title','Listado de Publicaciones')

@section('content')

<h1>Publicaciones</h1>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publicaciones as $publicacion)
                <tr>
                    <td class="hover:underline border border-black"><a href="{{route('investigacion.showPublicacion',$publicacion)}}">{{$publicacion->nombre}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$publicaciones->links()}}
<br>
@auth
<li class="hover:underline px-2"><a href="{{route('investigacion.createPublicacion')}}">Añadir Publicacion</a></li>
@endauth
@endsection
