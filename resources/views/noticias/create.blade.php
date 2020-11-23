@extends('layouts.plantilla')

@section('title','Noticias create')

@section('content')

<h1>Publicar una Noticia</h1>
<form action="{{route('noticias.store')}}"method="POST">
    @csrf
    <label>
        Titulo:
        <br>
        <input type="text" name="titulo" value="{{old('titulo')}}">
    </label>
    @error('titulo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Cuerpo:
        <br>
        <textarea name="cuerpo" cols="60" rows="10" >{{old('cuerpo')}}</textarea>
    </label>
    @error('cuerpo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Publicar Noticia</button>
</form>

@endsection
