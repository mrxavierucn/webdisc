@extends('layouts.plantilla')

@section('title','Publicar Noticia')

@section('content')

<h1>Publicar una Noticia</h1>
<br>
@auth
<form action="{{route('noticias.store')}}"method="POST" enctype="multipart/form-data">
    @csrf
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
                    Título*
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input class="border rounded border-gray-300 w-96" type="text" name="titulo" value="{{old('titulo')}}">
                        @error('titulo')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Cuerpo*
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <textarea name="cuerpo" cols="60" rows="10" >{{old('cuerpo')}}</textarea>
                        @error('cuerpo')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Foto (opcional)
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input class="px-2" type="file" name="foto" id="" accept="image/*">
                        @error('foto')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">

                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 w-32" type="submit">Publicar Noticia</button>
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
