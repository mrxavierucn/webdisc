@extends('layouts.plantilla')

@section('title','Programas')

@section('content')
<h1 class="text-center">Programas de Post-Titulo del Departamento</h1>
<br>
<p>Estos son los programas de Post-Titulo que ofrece el Departamento: </p>
<br>
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-10">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-64">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th scope="col" class="px-20 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Coordinador
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Duracion
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($posttitulos as $posttitulo)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="{{route('programas.showPosttitulo',$posttitulo)}}">{{$posttitulo->nombre}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$posttitulo->coordinador}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div class="text-sm text-gray-900">{{$posttitulo->duracion}} Semestres</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @auth
                                    <div>
                                        <a href="{{route('programas.editPosttitulo',$posttitulo)}}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                    </div>
                                    <br>
                                    <div>
                                        <form action="{{route('programas.destroyPosttitulo',$posttitulo)}}" METHOD="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="text-indigo-600 font-semibold hover:text-indigo-900" onclick="return confirm('¿Esta seguro que desea eliminar este programa de Pre-Grado?')" type="submit">Eliminar</button>
                                        </form>
                                    </div>
                                    @endauth
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<li><a href="{{route('programas.createPosttitulo')}}">Añadir Programa de Post-titulo</a></li>
@endsection
