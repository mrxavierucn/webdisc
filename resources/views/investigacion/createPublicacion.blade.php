@extends('layouts.plantilla')

@section('title','Añadir Publicacion')

@section('content')

<h1>Añadir Publicacion</h1>
<br>
@auth
<form action="{{route('investigacion.storePublicacion')}}"method="POST" enctype="multipart/form-data">
    @csrf
    <label>
        Nombre Publicacion:
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Traduccion (si aplica):
        <br>
        <input type="text" name="traduccion" value="{{old('traduccion')}}">
    </label>
    <br><br>
    <label>
        Nombre Revista:
        <br>
        <input type="text" name="revista" value="{{old('revista')}}">
    </label>
    @error('revista')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Año:
        <br>
        <input type="text" name="anio" value="{{old('anio')}}">
    </label>
    @error('anio')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Primera Pagina:
        <br>
        <input type="text" name="primera_pagina" value="{{old('primera_pagina')}}">
    </label>
    @error('primera_pagina')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Ultima Pagina:
        <br>
        <input type="text" name="ultima_pagina" value="{{old('ultima_pagina')}}">
    </label>
    @error('ultima_pagina')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Link:
        <br>
        <input type="text" name="link" value="{{old('link')}}">
    </label>
    @error('link')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button type="submit">Añadir Publicacion</button>
</form>
@else
<p>Usted no tiene acceso</p>
@endauth
@endsection
