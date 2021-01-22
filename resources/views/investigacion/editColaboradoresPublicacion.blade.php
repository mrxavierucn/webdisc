@extends('layouts.plantilla')

@section('title','Cambiar Co-autores')

@section('content')

<h1 class="px-2">Cambiar Co-autores</h1>
<br>
@auth
<div class="container mx-2 font-source">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Co-autores</th>
                <th class="border border-black bg-cool-gray-200">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($academicosActuales as $academico)
                    <tr>
                        <td class="border border-black">{{$academico->nombre}}</td>
                        <form action="{{route('investigacion.destroyColaboradoresPublicacion',[$academico,$publicacion])}}" METHOD="POST">
                            @csrf
                            @method('delete')
                            <td class="border border-black"><button class="underline" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar de la publicacion a este academico?')">Eliminar</button></td>

                        </form>

                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
<br>
<form action="{{route('investigacion.updateColaboradoresPublicacion',[$publicacion,$academico->id])}}"method="POST">
    @csrf
    @method('put')
    <select class="border rounded border-black mx-2" name="academico_id">
        @foreach ($academicos as $academico)
            <option value="{{$academico->id}}">{{$academico->nombre}}</option>
        @endforeach
    </select>
    <br><br>
    <button class="border rounded border-black hover:bg-cool-gray-400 bg-gray-300 mx-2" type="submit">Guardar Cambios</button>
</form>
<br>
@else
<p>Usted no tiene acceso.</p>
@endauth
@endsection
