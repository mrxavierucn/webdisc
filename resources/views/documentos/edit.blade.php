@extends('layouts.plantilla')

@section('title','Documentos edit')

@section('content')

<h1>Modificar Documento</h1>
@auth
<form action="{{route('documentos.update',$documento)}}"method="POST">
    @csrf
    @method('put')
    <label>
        Titulo:
        <br>
        <input type="text" name="titulo"  value="{{old('titulo',$documento->titulo)}}">
    </label>
    @error('titulo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" cols="60" rows="10" >{{old('descripcion',$documento->descripcion)}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Guardar Cambios</button>
</form>
@else
<p>Usted no tiene acceso.</p>
@endauth
@endsection
