@extends('layouts.plantilla')

@section('title','Noticias edit')

@section('content')

<h1>Modificar Noticia</h1>
<br>
@auth
<form action="{{route('noticias.update',$noticia)}}"method="POST">
    @csrf
    @method('put')
    <label>
        Titulo:
        <br>
        <input type="text" name="titulo"  value="{{old('titulo',$noticia->titulo)}}">
    </label>
    @error('titulo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Cuerpo:
        <br>
        <textarea name="cuerpo" cols="60" rows="10" >{{old('cuerpo',$noticia->cuerpo)}}</textarea>
    </label>
    @error('cuerpo')
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
