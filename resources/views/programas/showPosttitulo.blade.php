@extends('layouts.plantilla')

@section('title',$posttitulo->nombre)

@section('content')
<br>
<div class="bg-gray-200  shadow overflow-hidden sm:rounded-lg font-source">
    <div class="px-4 py-5 sm:px-6 border border-gray-200">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{$posttitulo->nombre}}
      </h3>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Coordinador:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$posttitulo->coordinador}}
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Descripción:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p style="white-space: pre-line">{{$posttitulo->descripcion}}</p>
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Duración:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$posttitulo->duracion}} Semestres.
        </dd>
        </div>
        @if ($posttitulo->cuerpo)
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
              Cuerpo de Profesores:
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <p style="white-space: pre-line">{{$posttitulo->cuerpo}}</p>

          </dd>
          </div>
        @endif
        @if ($posttitulo->malla)
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
              Malla:
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <img class="float-left" src="{{asset($posttitulo->malla)}}" alt="">
          </dd>
          </div>
        @endif
        @auth
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
                <a href="{{route('programas.editPosttitulo',$posttitulo)}}">Modificar Programa de Posttitulo</a>
                <form action="{{route('programas.destroyPosttitulo',$posttitulo)}}" METHOD="POST">
                    @csrf
                    @method('delete')
                    <button class="font-semibold" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar este programa?')">Eliminar Programa de Posttitulo</button>
                </form>
            </dt>
          </div>
        @endauth

      </dl>
    </div>
</div>
@endsection
