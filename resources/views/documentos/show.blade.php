@extends('layouts.plantilla')

@section('title',$documento->titulo)

@section('content')
<h1>Documentos de Interes</h1>
<nav>
    <ul>
        {{$documento->titulo}}
        <br>
        {{$documento->created_at}}
    </ul>
</nav>

@endsection

