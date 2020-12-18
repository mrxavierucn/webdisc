@extends('layouts.plantilla')

@section('title','Programas')

@section('content')
<h1 class="text-center">Programas de Post-Grado del Departamento</h1>
<br>
<p>Estos son los programas de Post-Grado que ofrece el Departamento: </p>
<br>
<nav>
    <ul>
        @foreach ($postgrados as $postgrado)
            <li>
                <a href="{{route('programas.showPostgrado',$postgrado)}}">{{$postgrado->nombre}}</a>
            </li>
        @endforeach
    </ul>
</nav>
{{$postgrados->links()}}
<br>
<li><a href="{{route('programas.createPostgrado')}}">Añadir Programa de Post-grado</a></li>
@endsection
