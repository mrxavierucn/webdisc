@extends('layouts.plantilla')

@section('title',$pregrado->nombre)

@section('content')
<br>
<div class="bg-gray-200  shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 border border-gray-200">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{$pregrado->nombre}}
      </h3>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Jefe de Carrera:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$pregrado->jefe}}
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Titulo Profesional:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$pregrado->titulo}}
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Grado Academico:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$pregrado->gradoAcademico}}
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Area (Sub-area) de Conocimiento:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$pregrado->area}} ({{$pregrado->subarea}})
          </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            Duracion:
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$pregrado->duracion}} Semestres.
        </dd>
        </div>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
              Acreditacion:
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
              {{$pregrado->acreditacion}}
          </dd>
          </div>
          <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
              Perfil de Egresado:
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <p style="white-space: pre-line">{{$pregrado->perfilEgresado}}</p>
          </dd>
          </div>
          @if ($pregrado->url)
          <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
              Mas informacion en:
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <a href="{{$pregrado->url}}" target="_blank" class="hover:underline">{{$pregrado->url}}</a>
          </dd>
          </div>
          @endif
          @auth
          <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
                <a href="{{route('programas.editPregrado',$pregrado)}}">Modificar Programa de Pregrado</a>
                <form action="{{route('programas.destroyPregrado',$pregrado)}}" METHOD="POST">
                    @csrf
                    @method('delete')
                    <button class="font-semibold" type="submit" onclick="return confirm('¿Esta seguro que desea eliminar este programa?')">Eliminar Programa de Pregradoo</button>
                </form>
            </dt>
          </div>
          @endauth

      </dl>
    </div>
</div>
<br>
@endsection

