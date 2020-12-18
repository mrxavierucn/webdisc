@extends('layouts.plantilla')

@section('title','Añadir Proyecto')

@section('content')

<h1>Añadir Proyecto</h1>
<br>
@auth
<form action="{{route('investigacion.storeProyecto')}}"method="POST" enctype="multipart/form-data">
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
        Objetivo:
        <br>
        <textarea name="objetivo" cols="60" rows="10" >{{old('objetivo')}}</textarea>
    </label>
    @error('objetivo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Link:
        <br>
        <input type="text" name="link" value="{{old('link')}}">
    </label>
    @error('link')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Publicar Proyecto</button>
</form>
@else
<p>Usted no tiene acceso.</p>
@endauth
@endsection
