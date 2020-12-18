@extends('layouts.plantilla')

@section('title','Noticias')

@section('content')

<h1 class="text-center">Documentos de Interes</h1>
<br>
<p class="mx-2">Escoja una categoria</p>
<br>
<div class="container">
    <div class="bg-blue-800 w-screen h-13 bg-center">
        <table class="table text-white text-center w-screen">
            <thead>
                <tr>
                    <td class="hover:underline  hover:bg-blue-900 border border-black px-4 py-3"><a href="{{route('documentos.reacreditacion')}}">Reacreditacion</a></td>
                    <td class="hover:underline  hover:bg-blue-900 border border-black px-4 py-3"><a href="{{route('documentos.plan')}}">Plan Estrategico</a></td>
                    <td class="hover:underline  hover:bg-blue-900 border border-black px-4 py-3"><a href="{{route('documentos.otro')}}">Otros Documentos</a></td>
                </tr>
            </thead>
        </table>
    </div>
</div>
<br>
@auth
<li class="hover:underline px-2"><a href="{{route('documentos.create')}}">Subir Documento</a></li>
@endauth
@endsection
