@extends('layouts.plantilla')

@section('title','Editar Publicacion')

@section('content')

<h1 class="px-2">Modificar Proyecto</h1>
<br>
@auth
<form action="{{route('investigacion.updateProyecto',$proyecto)}}"method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre',$proyecto->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Objetivo:
        <br>
        <textarea name="objetivo" cols="60" rows="10" >{{old('objetivo',$proyecto->objetivo)}}</textarea>
    </label>
    @error('objetivo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Link:
        <br>
        <input type="text" name="link" value="{{old('link',$proyecto->link)}}">
    </label>
    @error('link')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button class="border rounded border-black hover:bg-cool-gray-400 bg-gray-300 mx-2" type="submit">Guardar Cambios</button>
</form>
@else
<p>Usted no tiene acceso</p>
@endauth
@endsection
