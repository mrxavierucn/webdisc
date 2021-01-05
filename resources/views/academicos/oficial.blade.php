@extends('layouts.plantilla')

@section('title','Académicos de Planta Oficial')

@section('content')

<h1 class="text-center font-source">Académicos de Planta Oficial</h1>
<br>
<p class="mx-2 font-source">Estos son los Académicos propios del Departamento: </p>
<br>
<div class="flex flex-col font-source">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-10">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-64">
            <div class="shadow overflow-hidden border border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th scope="col" class="px-20 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Correo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50 divide-y divide-gray-200">
                        @foreach ($oficiales as $oficial)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @if ($oficial->foto)
                                                <img class="h-10 w-10 rounded-full" src="{{asset($oficial->foto)}}" alt="">
                                            @else
                                                <img class="h-10 w-10 rounded-full" src="{{asset('/storage/default.jpg')}}" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="{{route('academicos.show',$oficial)}}" class="hover:underline">{{$oficial->nombre}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$oficial->correo}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Académico de Planta Oficial
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @auth
                                    <div>
                                        <a href="{{route('academicos.edit',$oficial)}}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                    </div>
                                    <br>
                                    <div>
                                        <form action="{{route('academicos.destroy',$oficial)}}" METHOD="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="text-indigo-600 font-semibold hover:text-indigo-900" onclick="return confirm('¿Esta seguro que desea eliminar a este academico?')" type="submit">Eliminar</button>
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
<li class="hover:underline px-2"><a href="{{route('academicos')}}">Volver a la página anterior</a></li>
@endsection
