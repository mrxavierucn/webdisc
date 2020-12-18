@extends('layouts.plantilla')

@section('title','Documentos create')

@section('content')

<h1>Subir un Documento</h1>
@auth
<form action="{{route('documentos.store')}}"method="POST" enctype="multipart/form-data">
    @csrf
    <label>
        Titulo:
        <br>
        <input type="text" name="titulo" value="{{old('titulo')}}">
    </label>
    @error('titulo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" cols="60" rows="10" >{{old('descripcion')}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <p class="px-2">Tipo de Documento*</p>
    <select class="border rounded border-black mx-2" name="tipo">
        <option value="reacreditacion">Re-Acreditacion</option>
        <option value="plan">Plan Estrategico</option>
        <option value="otro">Otros</option>
     </select>
     <br><br>
    <input type="file" name="enlace" id="" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,
    .pdf,.txt,.xlsx,.xls,.pptx,.ppt">
    @error('enlace')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Publicar Noticia</button>
</form>
@else
<p>Usted No tiene Accesso.</p>
@endauth

@endsection
