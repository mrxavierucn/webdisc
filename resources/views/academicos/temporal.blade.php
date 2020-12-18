@extends('layouts.plantilla')

@section('title','Academicos')

@section('content')

<h1 class="text-center">Academicos de Planta Temporal</h1>
<br>
<p class="mx-2">Estos son los Academicos de la planta temporal del Departamento: </p>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Nombre</th>
                <th class="border border-black bg-cool-gray-200">Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($academicos as $academico)
                @if ($academico->permanencia=='temporal')
                <tr>
                    <td class="hover:underline border border-black"><a href="{{route('academicos.show',$academico)}}">{{$academico->nombre}}</a></td>
                    @if ($academico->rol)
                        <td class="border border-black">{{$academico->rol}}</td>
                    @else
                        <td class="border border-black">Ninguno.</td>
                    @endif
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
<br>
<li class="hover:underline px-2"><a href="{{route('academicos')}}">Volver a la pagina anterior</a></li>
@endsection
