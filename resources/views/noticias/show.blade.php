@extends('layouts.plantilla')

@section('title',$noticia->titulo)

@section('content')
<h1>Portal de Noticias</h1>
<li><a href="{{route('noticias.edit',$noticia)}}">Modificar Noticia</a></li>
<nav>
    <ul>
        {{$noticia->titulo}}
        <br>
        {{$noticia->created_at}}
        <br><br>
        {{$noticia->cuerpo}}
    </ul>
</nav>
<form action="{{route('noticias.destroy',$noticia)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar Noticia</button>
</form>

@endsection

