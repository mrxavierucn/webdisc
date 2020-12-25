@extends('layouts.plantilla')

@section('title','Cambiar Colaboradores')

@section('content')

<h1 class="px-2">Cambiar Colaboradores</h1>
<br>
@auth
<div class="container mx-2 font-source">
    <table class="table text-left">
        <thead>
            <tr>
                <th class="border border-black bg-cool-gray-200">Colaboradores</th>
                <th class="border border-black bg-cool-gray-200">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($academicosActuales as $academico)
                    <tr>
                        <td class="border border-black">{{$academico->nombre}}</td>
                        <form action="{{route('investigacion.destroyColaboradoresProyecto',[$academico,$proyecto])}}" METHOD="POST">
                            @csrf
                            @method('delete')
                            <td class="border border-black"><button class="underline" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar del proyecto a este academico?')">Eliminar</button></td>

                        </form>

                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
<br>
<form action="{{route('investigacion.updateColaboradoresProyecto',[$proyecto,$academico->id])}}"method="POST">
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
