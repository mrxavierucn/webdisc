@extends('layouts.plantilla')

@section('title','Modificar Programa de Pregrado')

@section('content')

<h1>Modificar Programa de Pregrado</h1>
<br>
@auth
<form action="{{route('programas.updatePregrado',$pregrado)}}"method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre',$pregrado->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Jefe de Carrera:
        <br>
        <input type="text" name="jefe" value="{{old('jefe',$pregrado->jefe)}}">
    </label>
    @error('jefe')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Titulo Profesional:
        <br>
        <input type="text" name="titulo" value="{{old('titulo',$pregrado->titulo)}}">
    </label>
    @error('titulo')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Grado Academico:
        <br>
        <input type="text" name="gradoAcademico" value="{{old('gradoAcademico',$pregrado->gradoAcademico)}}">
    </label>
    @error('gradoAcademico')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Area de Conocimiento:
        <br>
        <input type="text" name="area" value="{{old('area',$pregrado->area)}}">
    </label>
    @error('area')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Sub-Area:
        <br>
        <input type="text" name="subarea" value="{{old('subarea',$pregrado->subarea)}}">
    </label>
    @error('subarea')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Duracion en Semestres:
        <br>
        <input type="text" name="duracion" value="{{old('duracion',$pregrado->duracion)}}">
    </label>
    @error('duracion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Estado de Acreditacion:
        <br>
        <input type="text" name="acreditacion" value="{{old('acreditacion',$pregrado->acreditacion)}}">
    </label>
    @error('acreditacion')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Perfil de Egresado:
        <br>
        <textarea name="perfilEgresado" cols="60" rows="10" >{{old('perfilEgresado',$pregrado->perfilEgresado)}}</textarea>
    </label>
    @error('perfilEgresado')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br><br>
    <label>
        Enlace a la carrera de la ucn (en caso de existir):
        <br>
        <input type="text" name="url" value="{{old('url',$pregrado->url)}}">
    </label>
    <br><br>
    <button type="submit">Guardar Cambios</button>
</form>
@else
<p>Usted No tiene Acceso.</p>
@endauth
@endsection
