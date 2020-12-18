@extends('layouts.plantilla')

@section('title','Otros Documentos')

@section('content')

<h1 class="text-center">Otros Documentos</h1>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">titulo</th>
                <th class="border border-black bg-cool-gray-200">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documentos as $documento)
                @if ($documento->tipo=='otro')
                <tr>
                    <td class="hover:underline border border-black"><a href="{{route('documentos.show',$documento)}}">{{$documento->titulo}}</a></td>
                    <td class="hover:underline border border-black">{{$documento->descripcion}}</td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
<br>
<li class="hover:underline px-2"><a href="{{route('documentos')}}">Volver a la pagina anterior</a></li>
@endsection
