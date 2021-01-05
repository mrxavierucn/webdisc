@extends('layouts.plantilla')

@section('title','Editar Funcionario')

@section('content')

<h1 class="px-2 text-center font-source">Modificar Funcionario</h1>
<br>
@auth
<form action="{{route('academicos.update',$academico)}}"method="POST">
    @csrf
    @method('put')
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
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
                    <input class="border rounded border-gray-300 w-96" type="text" name="nombre" value="{{old('nombre',$academico->nombre)}}">
                        @error('nombre')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Rol (opcional)
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input class="border rounded border-gray-300 w-96" type="text" name="rol" value="{{old('rol',$academico->rol)}}">
                        @error('rol')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        Correo*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <input class="border rounded border-gray-300 w-96" type="text" name="correo" value="{{old('correo',$academico->correo)}}">
                            @error('correo')
                                <br>
                                <small>*{{$message}}</small>
                            @enderror
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    Permanencia*
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <select class="border rounded border-gray-300 w-60" name="permanencia">
                        <option {{($academico->permanencia)=='oficial' ? 'selected' : '' }} value="oficial">Académico de Planta Oficial</option>
                        <option {{($academico->permanencia)=='especial' ? 'selected' : '' }} value="especial">Académico de Planta Especial</option>
                        <option {{($academico->permanencia)=='temporal' ? 'selected' : '' }} value="temporal">Académico de Planta Temporal</option>
                        <option {{($academico->permanencia)=='apoyo' ? 'selected' : '' }} value="apoyo">Personal de Apoyo</option>
                    </select>
                </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">

                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 w-32" type="submit">Añadir Academico</button>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</form>
@else
<p>Usted no tiene acceso.</p>
@endauth
@endsection
