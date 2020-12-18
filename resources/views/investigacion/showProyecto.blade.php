@extends('layouts.plantilla')

@section('title','Proyecto')

@section('content')

<h1>Proyecto</h1>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Nombre</th>
                <th class="border border-black bg-cool-gray-200">Objetivo</th>
                <th class="border border-black bg-cool-gray-200">Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-black">{{$proyecto->nombre}}</td>
                <td class="border border-black">{{$proyecto->objetivo}}</td>
                <td class="hover:underline border border-black"><a href="{{$proyecto->link}}">{{$proyecto->link}}</a></td>
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
<button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2"><a href="{{route('investigacion.editProyecto',$proyecto)}}">Modificar Proyecto</a></button>
<br>
<button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2"><a href="{{route('investigacion.editColaboradoresProyecto',$proyecto)}}">Cambiar Colaboradores</a></button>
<br>
<form action="{{route('investigacion.destroyProyecto',$proyecto)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2" type="submit">Eliminar Proyecto</button>
</form>
@endauth

@endsection
