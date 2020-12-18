@extends('layouts.plantilla')

@section('title','Modificar Programa de Postgrado')

@section('content')

<h1>Modificar Programa de Postgrado</h1>
<br>
@auth
<form action="{{route('programas.updatePostgrado',$postgrado)}}"method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre',$postgrado->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Director del Programa:
        <br>
        <input type="text" name="director" value="{{old('director',$postgrado->director)}}">
    </label>
    @error('director')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" cols="60" rows="10" >{{old('descripcion',$postgrado->descripcion)}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Duracion en Semestres:
        <br>
        <input type="text" name="duracion" value="{{old('duracion',$postgrado->duracion)}}">
    </label>
    @error('duracion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Enlace a la carrera de la ucn (en caso de existir):
        <br>
        <input type="text" name="url" value="{{old('url',$postgrado->url)}}">
    </label>
    <br><br>
    <button type="submit">Guardar Cambios</button>
</form>
@else
<p>Usted No tiene Acceso.</p>
@endauth
@endsection
