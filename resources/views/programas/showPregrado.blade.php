@extends('layouts.plantilla')

@section('title',$pregrado->nombre)

@section('content')
<h1>{{$pregrado->nombre}}</h1>
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
        <li>Perfil de Egresado: {{$pregrado->egresado}}</li>
    </ul>
</nav>
@endsection

