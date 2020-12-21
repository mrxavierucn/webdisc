@extends('layouts.plantilla')

@section('title',$documento->titulo)

@section('content')
<h1>Documentos de Interes</h1>
<br>
<div class="bg-gray-200  shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 border border-gray-200">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{$documento->titulo}}
      </h3>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Descripcion:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p style="white-space: pre-line">{{$documento->descripcion}}</p>
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Tipo:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              @if ($documento->tipo=="reacreditacion")
                Reacreditacion de Programa
              @else
                @if ($documento->tipo=="plan")
                    Plan Estrategico
                @else
                    Otros Documentos
                @endif
              @endif
        </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
              Descargar:
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <a href="{{asset($documento->enlace)}}" download="{{$documento->archivo}}" target="_blank">
                    <button type="button" class="border rounded border-black hover:bg-cool-gray-300 bg-gray-200 mx-2">Descargar</button>
                </a>
            </dd>
          </div>
        @auth
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
                <a href="{{route('documentos.edit',$documento)}}">Editar Documento</a>
                <form action="{{route('documentos.destroy',$documento)}}" METHOD="POST">
                    @csrf
                    @method('delete')
                    <button class="font-semibold" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar este programa?')">Eliminar Documento</button>
                </form>
            </dt>
          </div>
        @endauth

      </dl>
    </div>
</div>
<br>
@endsection

