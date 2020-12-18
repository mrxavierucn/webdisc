@extends('layouts.plantilla')

@section('title',$pregrado->nombre)

@section('content')
<h1>{{$pregrado->nombre}}</h1>
<br>
<nav>
    <ul>
        <li>Jefe de Carrera: {{$pregrado->jefe}}</li>
        <br>
        <li>Titulo: {{$pregrado->titulo}}</li>
        <br>
        <li>Grado Academico: {{$pregrado->gradoAcademico}}</li>
        <br>
        <li>Area (sub-area) de Conocimiento: {{$pregrado->area}}({{$pregrado->subarea}})</li>
        <br>
        <li>Duracion: {{$pregrado->duracion}} semestres academicos.</li>
        <br>
        <li>Acreditacion: {{$pregrado->acreditacion}}</li>
        <br>
        <li>Perfil de Egresado: {{$pregrado->perfilEgresado}}</li>
        @if ($pregrado->url)
            <br>
            <li>Mas informacion en: {{$pregrado->url}}</li>
        @endif
    </ul>
</nav>
<br>
<li><a href="{{route('programas.editPregrado',$pregrado)}}">Modificar Programa de Pregrado</a></li>
<form action="{{route('programas.destroyPregrado',$pregrado)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar Programa de Postgrado</button>
</form>
<br>
@endsection

