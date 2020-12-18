@extends('layouts.plantilla')

@section('title',$posttitulo->nombre)

@section('content')
<h1>{{$posttitulo->nombre}}</h1>
<br>
<nav>
    <ul>
        <li>Director: {{$posttitulo->coordinador}}</li>
        <br>
        <li>Descripcion: {{$posttitulo->descripcion}}</li>
        <br>
        <li>Duracion en Semestres: {{$posttitulo->duracion}}</li>
        @if ($posttitulo->malla)
            <div class="container">
                <img class="float-left" src="{{asset($posttitulo->malla)}}" alt="">
            </div>
        @endif
    </ul>
</nav>
<br>
<li><a href="{{route('programas.editPosttitulo',$posttitulo)}}">Modificar Programa de Post-titulo</a></li>
<form action="{{route('programas.destroyPosttitulo',$posttitulo)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar Programa de Post-titulo</button>
</form>
@endsection
