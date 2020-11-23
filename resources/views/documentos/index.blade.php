@extends('layouts.plantilla')

@section('title','Noticias')

@section('content')

<h1>Documentos de Interes</h1>
<ul>
    @foreach ($documentos as $documento)
    <li>
    <a href="{{route('documentos.show',$documento->id)}}">{{$documento->titulo}}</a>

    </li>
    @endforeach
</ul>
@endsection
