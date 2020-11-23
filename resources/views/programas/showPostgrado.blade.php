@extends('layouts.plantilla')

@section('title',$postgrado->nombre)

@section('content')
<h1>{{$postgrado->nombre}}</h1>
<nav>
    <ul>
        <li>Director: {{$postgrado->director}}</li>
        <br>
        <li>Plan de Estudios: {{$postgrado->planEstudio}}</li>
        <br>
        <li>Descripcion: {{$postgrado->descripcion}}</li>
        <br>
        <li>Objetivo: {{$postgrado->objetivo}}</li>
        <br>
        <li>{{$postgrado->dirigidoA}}</li>
    </ul>
</nav>
@endsection

