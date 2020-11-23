@extends('layouts.plantilla')

@section('title','Programas')

@section('content')
<h1>Programas de Pre-Grado del Departamento</h1>
<p>Estos son los programas de Pre-Grado que ofrece el Departamento: </p>
<nav>
    <ul>
        @foreach ($pregrados as $pregrado)
            <li>
                <a href="{{route('programas.showPregrado',$pregrado->id)}}">{{$pregrado->nombre}}</a>
            </li>
        @endforeach
    </ul>
</nav>
@endsection
