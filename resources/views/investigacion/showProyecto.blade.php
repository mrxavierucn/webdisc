@extends('layouts.plantilla')

@section('title','Proyecto')

@section('content')

<h1>Proyecto</h1>
<br>
<div class="bg-gray-200  shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 border border-gray-200">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$proyecto->nombre}}
        </h3>
    </div>
    <div class="border-t border-gray-200">
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Objetivo:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$proyecto->objetivo}}
                </dd>
            </div>
            @if ($academicos->count())
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Colaboradores:
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
                    Sin Colaboradores
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                </dd>
            </div>
            @endif
            @auth
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        <a href="{{route('investigacion.editProyecto',$proyecto)}}">Modificar Proyecto</a>
                        <br>
                        <a href="{{route('investigacion.editColaboradoresProyecto',$proyecto)}}">Cambiar Colaboradores</a>
                        <form action="{{route('investigacion.destroyProyecto',$proyecto)}}" METHOD="POST">
                            @csrf
                            @method('delete')
                            <button class="font-semibold" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar este programa?')">Eliminar Proyecto</button>
                        </form>
                    </dt>
                </div>
            @endauth
        </dl>
    </div>
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
    <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2" onclick="return confirm('¿Esta seguro que desea eliminar este proyecto?')" type="submit">Eliminar Proyecto</button>
</form>
@endauth

@endsection
