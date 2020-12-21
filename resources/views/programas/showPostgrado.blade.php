@extends('layouts.plantilla')

@section('title',$postgrado->nombre)

@section('content')
<br>
<div class="bg-gray-200  shadow overflow-hidden sm:rounded-lg font-source">
    <div class="px-4 py-5 sm:px-6 border border-gray-200">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{$postgrado->nombre}}
      </h3>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Director:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$postgrado->director}}
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Descripción:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p style="white-space: pre-line">{{$postgrado->descripcion}}</p>
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Duración:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$postgrado->duracion}} Semestres.
        </dd>
        </div>
          @if ($postgrado->url)
          <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
              Mas informacion en:
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <a href="{{$postgrado->url}}" target="_blank" class="hover:underline">{{$postgrado->url}}</a>
          </dd>
          </div>
          @endif
          @auth
          <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
                <a href="{{route('programas.editPostgrado',$postgrado)}}">Modificar Programa de Postgrado</a>
                <form action="{{route('programas.destroyPostgrado',$postgrado)}}" METHOD="POST">
                    @csrf
                    @method('delete')
                    <button class="font-semibold" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar este programa?')">Eliminar Programa de Postgrado</button>
                </form>
            </dt>
          </div>
          @endauth

      </dl>
    </div>
</div>
@endsection

