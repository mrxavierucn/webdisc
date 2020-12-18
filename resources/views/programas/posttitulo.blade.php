@extends('layouts.plantilla')

@section('title','Programas')

@section('content')
<h1 class="text-center">Programas de Post-Titulo del Departamento</h1>
<br>
<p>Estos son los programas de Post-Titulo que ofrece el Departamento: </p>
<br>
<nav>
    <ul>
        @foreach ($posttitulos as $posttitulo)
            <li>
                <a href="{{route('programas.showPosttitulo',$posttitulo)}}">{{$posttitulo->nombre}}</a>
            </li>
        @endforeach
    </ul>
</nav>
{{$posttitulos->links()}}
<br>
<li><a href="{{route('programas.createPosttitulo')}}">Añadir Programa de Post-titulo</a></li>
@endsection
