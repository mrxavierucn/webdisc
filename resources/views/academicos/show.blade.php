@extends('layouts.plantilla')

@section('title',$academico->nombre)

@section('content')
<h1 class="text-center font-source">Cuerpo Academico</h1>
<br>
<div class="flex justify-center font-source">
    <div class="max-w-xs rounded overflow-hidden shadow-lg my-2">
        @if ($academico->foto)
            <img class="w-full" src="{{asset($academico->foto)}}" alt="">
        @else
            <img class="w-full" src="{{asset('/storage/default.jpg')}}" alt="">
        @endif
        <div class="px-6 py-4 bg-gray-50">
            <div class="font-bold text-xl mb-2 font-source">{{$academico->nombre}}</div>
            <p class="text-grey-darker text-base font-source">
                @if ($academico->rol)
                    Rol: {{$academico->rol}}.
                @else
                    Rol: Ninguno.
                @endif
            </p>
            <br>
            <p class="text-grey-darker text-base font-source">
                @if ($academico->permanencia=='permanente')
                    Permanencia: Académico Permanente.
                @else
                    @if (($academico->permanencia=='temporal'))
                        Permanencia: Planta Temporal.
                    @else
                        Permanencia: Personal de Apoyo a la Academia.
                    @endif
                @endif
            </p>
            <br>
            @auth
                <p class="text-grey-darker text-base font-source hover:underline"><a href="{{route('academicos.edit',$academico)}}">Modificar Académico</a></p>
                <br>
                <form action="{{route('academicos.destroy',$academico)}}" METHOD="POST">
                    @csrf
                    @method('delete')
                    <button class="text-grey-darker text-base font-source hover:underline" onclick="return confirm('¿Esta seguro que desea eliminar a este academico?')" type="submit">Eliminar Académico</button>
                </form>
            @endauth
        </div>
    </div>
</div>
<br>
@endsection

