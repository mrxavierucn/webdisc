@extends('layouts.plantilla')

@section('title','Nuevo Programa de Postgrado')

@section('content')

<h1>Nuevo Programa de Postgrado</h1>
<br>
@auth
<form action="{{route('programas.storePostgrado')}}"method="POST" enctype="multipart/form-data">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Director del Programa:
        <br>
        <input type="text" name="director" value="{{old('director')}}">
    </label>
    @error('director')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" cols="60" rows="10" >{{old('descripcion')}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Duracion en Semestres:
        <br>
        <input type="text" name="duracion" value="{{old('duracion')}}">
    </label>
    @error('duracion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Enlace a la carrera de la ucn (en caso de existir):
        <br>
        <input type="text" name="url" value="{{old('url')}}">
    </label>
    <br><br>
    <button type="submit">Crear Programa de Postgrado</button>
</form>
@else
<p>Usted No tiene Acceso.</p>
@endauth
@endsection
