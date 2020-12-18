@extends('layouts.plantilla')

@section('title','Modificar Programa de Posttitulo')

@section('content')

<h1>Modificar Programa de Posttitulo</h1>
<br>
@auth
<form action="{{route('programas.updatePosttitulo',$posttitulo)}}"method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre',$posttitulo->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Coordinador del Programa:
        <br>
        <input type="text" name="coordinador" value="{{old('coordinador',$posttitulo->coordinador)}}">
    </label>
    @error('coordinador')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" cols="60" rows="10" >{{old('descripcion',$posttitulo->descripcion)}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Duracion en Semestres:
        <br>
        <input type="text" name="duracion" value="{{old('duracion',$posttitulo->duracion)}}">
    </label>
    @error('duracion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Guardar Cambios</button>
</form>
@else
<p>Usted No tiene Acceso.</p>
@endauth
@endsection
