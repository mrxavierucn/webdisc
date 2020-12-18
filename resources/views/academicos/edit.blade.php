@extends('layouts.plantilla')

@section('title','Academicos edit')

@section('content')

<h1 class="px-2">Modificar Academico</h1>
<br>
@auth
<form action="{{route('academicos.update',$academico)}}"method="POST">
    @csrf
    @method('put')
    <label class="px-2">
        Nombre*
        <br>
        <input class="border rounded border-black mx-2" type="text" name="nombre" value="{{old('nombre',$academico->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label class="px-2">
        Rol (opcional)
        <br>
        <input class="border rounded border-black mx-2" type="text" name="rol" value="{{old('rol',$academico->rol)}}">
    </label>
    @error('rol')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <p class="px-2">Permanencia*</p>
    <select class="border rounded border-black mx-2" name="permanencia">
        <option value="permanente">Academico Permanente</option>
        <option value="temporal">Planta Temporal</option>
        <option value="apoyo">Personal de Apoyo</option>
     </select>
     <br><br>
    <button class="border rounded border-black hover:bg-cool-gray-400 bg-gray-300 mx-2" type="submit">Guardar Cambios</button>
</form>
@else
<p>Usted no tiene acceso.</p>
@endauth
@endsection
