@extends('layouts.plantilla')

@section('title','Noticias')

@section('content')

<h1>Portal de Noticias</h1>
<br>
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-10">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-64">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th scope="col" class="px-20 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Noticia
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($noticias as $noticia)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="{{route('noticias.show',$noticia)}}">{{$noticia->titulo}}</a>
                                                <br>
                                                <br>
                                                <div class="text-sm text-gray-900">
                                                    {{ \Illuminate\Support\Str::limit($noticia->cuerpo, 100, $end='...') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                {{$noticias->links()}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br>
@auth
<a href="{{route('noticias.create')}}">Crear Noticia</a>
@endauth
@endsection
