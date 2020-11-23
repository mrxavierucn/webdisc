@extends('layouts.plantilla')

@section('title','Programas create')

@section('content')
<nav>
    <ul>
        <li><a href="{{route('programas')}}">programas</a></li>
        <li><a href="{{route('programas.create')}}">crear</a></li>
        <li><a href="">mostrar</a></li>
    </ul>
</nav>
<h1>crear programa: </h1>
@endsection


