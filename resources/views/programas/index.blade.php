@extends('layouts.plantilla')

@section('title','Programas')

@section('content')

<h1>Programas del Departamento</h1>
<p>Estos son los programas que ofrece el Departamento: </p>
<nav>
    <ul>
        <li><a href="{{route('programas.pregrado')}}">Programas de Pre-Grado</a></li>
        <li><a href="{{route('programas.postgrado')}}">Programas de Post-Grado</a></li>
        <li><a href="{{route('programas.posttitulo')}}">Programas de Post-Titulo</a></li>
    </ul>
</nav>
@endsection
