@extends('layouts.plantilla')

@section('title',$academico->nombre)

@section('content')
<h1 class="text-center">Cuerpo Academico</h1>
<br>
<div class="container mx-2">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Nombre</th>
                <th class="border border-black bg-cool-gray-200">Rol</th>
                <th class="border border-black bg-cool-gray-200">Tipo</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="border border-black">{{$academico->nombre}}</td>
                    @if ($academico->rol)
                        <td class="border border-black">{{$academico->rol}}</td>
                    @else
                        <td class="border border-black">Ninguno.</td>
                    @endif
                    @if ($academico->permanencia=='permanente')
                        <td class="border border-black">Academico Permanente.</td>
                    @else
                        @if (($academico->permanencia=='temporal'))
                            <td class="border border-black">Planta Temporal</td>
                        @else
                            <td class="border border-black">Personal de Apoyo a la Academia.</td>
                        @endif
                    @endif
                </tr>
        </tbody>
    </table>
</div>
<div class="container">
    <img class="float-left" src="{{asset($academico->foto)}}" alt="">
</div>
<br>
@auth
<button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2"><a href="{{route('academicos.edit',$academico)}}">Modificar Academico</a></button>
<br>
<form action="{{route('academicos.destroy',$academico)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2" type="submit">Eliminar Academico</button>
</form>
@endauth


@endsection

