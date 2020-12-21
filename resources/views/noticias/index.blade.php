@extends('layouts.plantilla')

@section('title','Noticias')

@section('content')

<h1>Portal de Noticias</h1>
<br>
<ul>
    @foreach ($noticias as $noticia)
    <li>
    <a href="{{route('noticias.show',$noticia)}}">{{$noticia->titulo}}</a>
    </li>
    @endforeach
</ul>
{{$noticias->links()}}
<br>
@auth
<a href="{{route('noticias.create')}}">Crear Noticia</a>
@endauth
@endsection
