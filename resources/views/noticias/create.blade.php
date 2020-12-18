@extends('layouts.plantilla')

@section('title','Noticias create')

@section('content')

<h1>Publicar una Noticia</h1>
<br>
@auth
<form action="{{route('noticias.store')}}"method="POST" enctype="multipart/form-data">
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
    <input class="px-2" type="file" name="foto" id="" accept="image/*">
    @error('foto')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Publicar Noticia</button>
</form>
@else
<p>Usted No tiene Acceso.</p>
@endauth
@endsection
