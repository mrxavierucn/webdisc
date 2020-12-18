@extends('layouts.plantilla')

@section('title','Crear Academico')

@section('content')

<h1 class="px-2">Añadir un Nuevo Academico</h1>
<br>
@auth
<form action="{{route('academicos.store')}}"method="POST" enctype="multipart/form-data">
    @csrf
    <label class="px-2">
        Nombre*
        <br>
        <input class="border rounded border-black mx-2" type="text" name="nombre" value="{{old('nombre')}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label class="px-2">
        Rol (opcional)
        <br>
        <input class="border rounded border-black mx-2" type="text" name="rol" value="{{old('rol')}}">
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
     <input class="px-2" type="file" name="foto" id="" accept="image/*">
     @error('foto')
        <br>
        <small>*{{$message}}</small>
    @enderror
     <br><br>
    <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2" type="submit">Añadir Academico</button>
</form>
@else
<p>Usted no tiene acceso</p>
@endauth


@endsection
