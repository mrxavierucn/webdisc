@extends('layouts.plantilla')

@section('title','Documentos de titulación')

@section('content')

<h1 class="text-center font-source">Documentos de Titulación</h1>
<br>
<div class="flex flex-col font-source">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-10">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-64">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th scope="col" class="px-20 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Título
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripción
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descarga
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($titulacions as $titulacion)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="{{route('documentos.show',$titulacion)}}">{{$titulacion->titulo}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ \Illuminate\Support\Str::limit($titulacion->descripcion, 20, $end='...') }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a href="{{asset($titulacion->enlace)}}" download="{{$titulacion->archivo}}">
                                        <button type="button" class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2">Descargar</button>
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @auth
                                    <div>
                                        <a href="{{route('documentos.edit',$titulacion)}}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                    </div>
                                    <br>
                                    <div>
                                        <form action="{{route('documentos.destroy',$titulacion)}}" METHOD="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="text-indigo-600 font-semibold hover:text-indigo-900" onclick="return confirm('¿Esta seguro que desea eliminar este documento?')" type="submit">Eliminar</button>
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
<li class="hover:underline px-2"><a href="{{route('documentos')}}">Volver a la página anterior</a></li>
@endsection
