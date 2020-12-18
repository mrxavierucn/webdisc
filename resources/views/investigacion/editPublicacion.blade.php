@extends('layouts.plantilla')

@section('title','Editar Proyecto')

@section('content')

<h1 class="px-2">Modificar Proyecto</h1>
<br>
@auth
<form action="{{route('investigacion.updatePublicacion',$publicacion)}}"method="POST">
    @csrf
    @method('put')
    <label>
        Nombre Publicacion:
        <br>
        <input type="text" name="nombre" value="{{old('nombre',$publicacion->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Traduccion (si aplica):
        <br>
        <input type="text" name="traduccion" value="{{old('traduccion',$publicacion->traduccion)}}">
    </label>
    <br><br>
    <label>
        Nombre Revista:
        <br>
        <input type="text" name="revista" value="{{old('revista',$publicacion->revista)}}">
    </label>
    @error('revista')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Año:
        <br>
        <input type="text" name="anio" value="{{old('anio',$publicacion->anio)}}">
    </label>
    @error('anio')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Primera Pagina:
        <br>
        <input type="text" name="primera_pagina" value="{{old('primera_pagina',$publicacion->primera_pagina)}}">
    </label>
    @error('primera_pagina')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Ultima Pagina:
        <br>
        <input type="text" name="ultima_pagina" value="{{old('ultima_pagina',$publicacion->ultima_pagina)}}">
    </label>
    @error('ultima_pagina')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Link:
        <br>
        <input type="text" name="link" value="{{old('link',$publicacion->link)}}">
    </label>
    @error('link')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <button class="border rounded border-black hover:bg-cool-gray-400 bg-gray-300 mx-2" type="submit">Guardar Cambios</button>
</form>
@else
<p>Usted no tiene acceso.</p>
@endauth
@endsection
