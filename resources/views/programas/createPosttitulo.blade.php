@extends('layouts.plantilla')

@section('title','Nuevo Programa de Posttitulo')

@section('content')

<h1>Nuevo Programa de Posttitulo</h1>
<br>
@auth
<form action="{{route('programas.storePosttitulo')}}"method="POST" enctype="multipart/form-data">
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
        Coordinador del Programa:
        <br>
        <input type="text" name="coordinador" value="{{old('coordinador')}}">
    </label>
    @error('coordinador')
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
    <input class="px-2" type="file" name="malla" id="" accept="image/*">
    @error('malla')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Crear Programa de Posttitulo</button>
</form>
@else
<p>Usted No tiene Acceso.</p>
@endauth
@endsection
