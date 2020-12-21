@extends('layouts.plantilla')

@section('title',$noticia->titulo)

@section('content')
<h1>Portal de Noticias</h1>
<br>
<nav>
    <ul>
        {{$noticia->titulo}}
        <br>
        {{$noticia->created_at}}
        <br><br>
        {{$noticia->cuerpo}}
    </ul>
</nav>
<div class="container">
    <img class="float-left" src="{{asset($noticia->foto)}}" alt="">
</div>
<br>
@auth
<li><a href="{{route('noticias.edit',$noticia)}}">Modificar Noticia</a></li>
<form action="{{route('noticias.destroy',$noticia)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button type="submit" onclick="return confirm('¿Esta seguro que desea eliminar esta noticia?')">Eliminar Noticia</button>
</form>
<br>
@endauth
<form action="{{route('noticias',$noticia)}}">
    <button type="submit">Volver al portal</button>
</form>

@endsection

