@extends('layouts.plantilla')

@section('title','Editar Publicacion')

@section('content')

<h1 class="px-2">Modificar Proyecto</h1>
<br>
@auth
<form action="{{route('investigacion.updateProyecto',$proyecto)}}"method="POST">
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
                    <input class="border rounded border-gray-300 w-96" type="text" name="nombre" value="{{old('nombre',$proyecto->nombre)}}">
                        @error('nombre')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Objetivo*
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input class="border rounded border-gray-300 w-96" type="text" name="objetivo" value="{{old('objetivo',$proyecto->objetivo)}}">
                        @error('objetivo')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        Empresa Fundadora*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <input class="border rounded border-gray-300 w-96" type="text" name="empresa" value="{{old('empresa',$proyecto->empresa)}}">
                            @error('empresa')
                                <br>
                                <small>*{{$message}}</small>
                            @enderror
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500 ">
                        Link*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <input class="border rounded border-gray-300 w-96" type="text" name="link" value="{{old('link',$proyecto->link)}}">
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        Colaboradores Externos:
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <textarea name="externo" cols="60" rows="10" >{{old('externo',$proyecto->externo)}}</textarea>
                        @error('externo')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
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
<p>Usted no tiene acceso</p>
@endauth
@endsection
