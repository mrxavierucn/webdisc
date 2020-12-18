@extends('layouts.plantilla')

@section('title','Listado de Proyectos')

@section('content')

<h1>Proyectos</h1>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td class="hover:underline border border-black"><a href="{{route('investigacion.showProyecto',$proyecto->id)}}">{{$proyecto->nombre}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$proyectos->links()}}
<br>
@auth
<li class="hover:underline px-2"><a href="{{route('investigacion.createProyecto')}}">Añadir Proyecto</a></li>
@endauth
@endsection
