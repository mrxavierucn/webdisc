@extends('layouts.plantilla')

@section('title',$postgrado->nombre)

@section('content')
<h1>{{$postgrado->nombre}}</h1>
<br>
<nav>
    <ul>
        <li>Director: {{$postgrado->director}}</li>
        <br>
        <li>Descripcion: {{$postgrado->descripcion}}</li>
        <br>
        <li>Duracion en Semestres: {{$postgrado->duracion}}</li>
        @if ($postgrado->url)
            <br>
            <li>Mas informacion en: {{$postgrado->url}}</li>
        @endif
    </ul>
</nav>
<br>
<li><a href="{{route('programas.editPostgrado',$postgrado)}}">Modificar Programa de Postgrado</a></li>
<form action="{{route('programas.destroyPostgrado',$postgrado)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar Programa de Postgrado</button>
</form>
@endsection

