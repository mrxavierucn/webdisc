@extends('layouts.plantilla')

@section('title','Programas')

@section('content')

<h1 class="text-center">Programas del Departamento</h1>
<br>
<p>Estos son los programas que ofrece el Departamento: </p>
<br>
<nav>
    <ul>
        <li><a href="{{route('programas.pregrado')}}">Programas de Pre-Grado</a></li>
        <li><a href="{{route('programas.postgrado')}}">Programas de Post-Grado</a></li>
        <li><a href="{{route('programas.posttitulo')}}">Programas de Post-Titulo</a></li>
    </ul>
</nav>
@endsection
