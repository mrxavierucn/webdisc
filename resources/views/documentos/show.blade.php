@extends('layouts.plantilla')

@section('title',$documento->titulo)

@section('content')
<h1>Documentos de Interes</h1>
<nav>
    <ul>
        {{$documento->titulo}}
        <br>
        {{$documento->descripcion}}
        <br>
        <a href="{{asset($documento->enlace)}}" download="{{$documento->archivo}}">
            <button type="button" class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2">Descargar</button>
        </a>
        <br>
        {{$documento->created_at}}
    </ul>
</nav>
@auth
<li><a href="{{route('documentos.edit',$documento)}}">Modificar Documento</a></li>
<form action="{{route('documentos.destroy',$documento)}}" METHOD="POST">
    @csrf
    @method('delete')
    <button type="submit" onclick="return confirm('¿Esta seguro que desea eliminar este documento?')">Eliminar Documento</button>
</form>
@endauth

@endsection

