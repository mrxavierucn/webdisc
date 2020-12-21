@extends('layouts.plantilla')

@section('title','Documentos create')

@section('content')

<h1>Subir un Documento</h1>
@auth
<form action="{{route('documentos.store')}}"method="POST" enctype="multipart/form-data">
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
                        Descripción*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <textarea name="descripcion" cols="60" rows="10" >{{old('descripcion')}}</textarea>
                        @error('descripcion')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                        Tipo*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <select class="border rounded border-gray-300 w-60" name="tipo">
                            <option value="reacreditacion">Reacreditación de Programa</option>
                            <option value="plan">Plan Estratégico</option>
                            <option value="otro">Otros</option>
                        </select>
                    </dd>
                    </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500 ">
                        Archivo*
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <input type="file" name="enlace" id="" accept=".doc,.docx,application/msword,
                        application/vnd.openxmlformats-officedocument.wordprocessingml.document,
                        .pdf,.txt,.xlsx,.xls,.pptx,.ppt">
                        @error('enlace')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                    </dd>
                </div>
                <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">

                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <button class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2" type="submit">Subir Documento</button>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</form>
@else
<p>Usted No tiene Accesso.</p>
@endauth

@endsection
