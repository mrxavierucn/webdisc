@extends('layouts.plantilla')

@section('title','Academicos')

@section('content')

<h1>Cuerpo Academico</h1>
<p>Estos son los Academicos con los que cuenta el Departamento: </p>
<nav>
    <ul>
        <li><a href="{{route('academicos.permanente')}}">Academicos Permanentes</a></li>
        <li><a href="{{route('academicos.temporal')}}">Planta Temporal</a></li>
        <li><a href="{{route('academicos.apoyo')}}">Personal de Apoyo</a></li>
    </ul>
</nav>
@endsection
