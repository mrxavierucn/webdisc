@extends('layouts.plantilla')

@section('title','Programas')

@section('content')
<h1>Programas de Post-Grado del Departamento</h1>
<p>Estos son los programas de Post-Grado que ofrece el Departamento: </p>
<nav>
    <ul>
        @foreach ($postgrados as $postgrado)
            <li>
                <a href="{{route('programas.showPostgrado',$postgrado->id)}}">{{$postgrado->nombre}}</a>
            </li>
        @endforeach
    </ul>
</nav>
@endsection
