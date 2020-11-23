@extends('layouts.plantilla')

@section('title','Noticias')

@section('content')

<h1>Portal de Noticias</h1>
<li><a href="{{route('noticias.create')}}">Crear Noticia</a></li>
<ul>
    @foreach ($noticias as $noticia)
    <li>
    <a href="{{route('noticias.show',$noticia->id)}}">{{$noticia->titulo}}</a>

    </li>
    @endforeach
</ul>
{{$noticias->links()}}
@endsection
