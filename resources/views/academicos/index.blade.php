@extends('layouts.plantilla')

@section('title','Academicos')

@section('content')

<h1 class="text-center">Cuerpo Academico</h1>
<br>
<p class="px-2">Estos son los Academicos con los que cuenta el Departamento: </p>
<br>
<div class="container">
    <div class="bg-blue-800 w-screen h-13 bg-center">
        <table class="table text-white text-center w-screen">
            <thead>
                <tr>
                    <td class="hover:underline  hover:bg-blue-900 border border-black px-4 py-3"><a href="{{route('academicos.permanente')}}">Academicos Permanentes</a></td>
                    <td class="hover:underline  hover:bg-blue-900 border border-black px-4 py-3"><a href="{{route('academicos.temporal')}}">Planta Temporal</a></td>
                    <td class="hover:underline  hover:bg-blue-900 border border-black px-4 py-3"><a href="{{route('academicos.apoyo')}}">Personal de Apoyo</a></td>
                </tr>
            </thead>
        </table>
    </div>
</div>
<br>
@auth
<li class="hover:underline px-2"><a href="{{route('academicos.create')}}">Añadir Academico</a></li>
@endauth
@endsection
