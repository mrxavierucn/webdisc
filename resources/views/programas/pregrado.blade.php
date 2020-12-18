@extends('layouts.plantilla')

@section('title','Programas')

@section('content')
<h1 class="text-center">Programas de Pre-Grado del Departamento</h1>
<br>
<p>Estos son los programas de Pre-Grado que ofrece el Departamento: </p>
<br>
<nav>
    <ul>
        @foreach ($pregrados as $pregrado)
            <li>
                <a href="{{route('programas.showPregrado',$pregrado)}}">{{$pregrado->nombre}}</a>
            </li>
        @endforeach
    </ul>
</nav>
{{$pregrados->links()}}
<br>
<li><a href="{{route('programas.createPregrado')}}">Añadir Programa de Pre-grado</a></li>
@endsection
