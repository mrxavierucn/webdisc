@extends('layouts.plantilla')

@section('title','Modificar Programa de Postgrado')

@section('content')

<h1>Modificar Programa de Postgrado</h1>
<br>
@auth
<form action="{{route('programas.updatePostgrado',$postgrado)}}"method="POST">
    @csrf
    @method('put')
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg font-source">
        <div class="px-4 py-5 sm:px-6 border border-gray-200">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Ingrese la información solicitada
            </h3>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Nombre*
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input class="border rounded border-gray-300 w-96" type="text" name="nombre" value="{{old('nombre',$postgrado->nombre)}}">
                        @error('nombre')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Director*
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input class="border rounded border-gray-300 w-96" type="text" name="director" value="{{old('director',$postgrado->director)}}">
                        @error('director')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        Descripción*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <textarea name="descripcion" cols="60" rows="10" >{{old('descripcion',$postgrado->descripcion)}}</textarea>
                        @error('descripcion')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500 ">
                        Duración en Semestres*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <input class="border rounded border-gray-300 w-96" type="text" name="duracion" value="{{old('duracion',$postgrado->duracion)}}">
                        @error('duracion')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        Enlace a la pagina de la universidad (en caso de existir)
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <input class="border rounded border-gray-300 w-96" type="text" name="url" value="{{old('url',$postgrado->url)}}">
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">

                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2" type="submit">Guardar Cambios</button>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</form>
@else
<p>Usted No tiene Acceso.</p>
@endauth
@endsection
