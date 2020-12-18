<?php

namespace App\Http\Controllers;

use App\Models\Academico;
use App\Models\Proyecto;
use App\Models\Publicacion;
use App\Http\Requests\StoreProyecto;
use App\Http\Requests\StorePublicacion;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InvestigacionController extends Controller
{
    public function index(){
        $academicos=Academico::orderBy('nombre','asc')->paginate();

        return view('investigacion.index',compact('academicos'));
    }

    public function listaProyectos(){
        $proyectos=Proyecto::orderBy('nombre','asc')->paginate();

        return view('investigacion.listaProyectos',compact('proyectos'));
    }

    public function showProyectos(Academico $academico){
        $proyectos = Academico::find($academico->id)->proyectos()->orderBy('id')->get();

        return view('investigacion.showProyectos',compact('academico','proyectos'));
    }

    public function createProyecto(){
        return view('investigacion.createProyecto');
    }

    public function storeProyecto(StoreProyecto $request){
        $proyecto=Proyecto::create($request->all());

        return redirect()->route('investigacion.showProyecto',$proyecto);
    }

    public function showProyecto(Proyecto $proyecto){
        $academicos = Proyecto::find($proyecto->id)->academicos()->orderBy('id')->get();

        return view('investigacion.showProyecto',compact('proyecto','academicos'));
    }

    public function editProyecto(Proyecto $proyecto){
        return view('investigacion.editProyecto',compact('proyecto'));
    }

    public function updateProyecto(Request $request,Proyecto $proyecto){
        $request->validate([
            'nombre'=>[
                'required',
                Rule::unique('proyectos')->ignore($proyecto)
            ],
            'objetivo'=>'required',
            'link'=>'required'
        ]);

        $proyecto->update($request->all());

        return redirect()->route('investigacion.showProyecto',$proyecto);
    }

    public function editColaboradoresProyecto(Proyecto $proyecto){
        $academico=Academico::find(1);
        $academicosActuales = Proyecto::find($proyecto->id)->academicos()->orderBy('id')->get();
        $academicos=Academico::orderBy('nombre','asc')->paginate(Academico::count());

        return view('investigacion.editColaboradoresProyecto',compact('academico','proyecto','academicosActuales','academicos'));
    }

    public function updateColaboradoresProyecto(Request $request,Proyecto $proyecto){
        $academicos = Proyecto::find($proyecto->id)->academicos()->orderBy('id')->get();
        foreach($academicos as $academico){
            if($academico->id==$request->academico_id){
                return redirect()->route('investigacion.showProyecto',$proyecto);
            }
        }
        $proyecto->academicos()->attach($request->academico_id);

        return redirect()->route('investigacion.showProyecto',$proyecto);
    }

    public function destroyProyecto(Proyecto $proyecto){
        $academicos = Proyecto::find($proyecto->id)->academicos()->orderBy('id')->get();
        foreach($academicos as $academico){
            $proyecto->academicos()->detach($academico->id);
        }
        $proyecto->delete();
        $proyectos=Proyecto::orderBy('nombre','asc')->paginate();

        return redirect()->route('investigacion.listaProyectos',$proyectos);
    }

    public function destroyColaboradoresProyecto(Academico $academico,Proyecto $proyecto){
        $proyecto->academicos()->detach($academico->id);

        return redirect()->route('investigacion.showProyecto',$proyecto);
    }

    public function listaPublicaciones(){
        $publicaciones=Publicacion::orderBy('nombre','asc')->paginate();

        return view('investigacion.listaPublicaciones',compact('publicaciones'));
    }

    public function showPublicaciones(Academico $academico){
        $publicaciones = Academico::find($academico->id)->publicaciones()->orderBy('id')->get();

        return view('investigacion.showPublicaciones',compact('academico','publicaciones'));
    }

    public function createPublicacion(){
        return view('investigacion.createPublicacion');
    }

    public function storePublicacion(StorePublicacion $request){
        $publicacion=Publicacion::create($request->all());

        return redirect()->route('investigacion.showPublicacion',$publicacion);
    }

    public function showPublicacion(Publicacion $publicacion){
        $academicos = Publicacion::find($publicacion->id)->academicos()->orderBy('id')->get();

        return view('investigacion.showPublicacion',compact('publicacion','academicos'));
    }

    public function editPublicacion(Publicacion $publicacion){
        return view('investigacion.editPublicacion',compact('publicacion'));
    }

    public function updatePublicacion(Request $request,Publicacion $publicacion){
        $request->validate([
            'nombre'=>[
                'required',
                Rule::unique('publicacions')->ignore($publicacion)
            ],
            'revista'=>'required',
            'anio'=>'required',
            'primera_pagina'=>'required',
            'ultima_pagina'=>'required',
            'link'=>'required'
        ]);

        $publicacion->update($request->all());

        return redirect()->route('investigacion.showPublicacion',$publicacion);
    }

    public function editColaboradoresPublicacion(Academico $academico,Publicacion $publicacion){
        $academico=Academico::find(1);
        $academicosActuales = Publicacion::find($publicacion->id)->academicos()->orderBy('id')->get();
        $academicos=Academico::orderBy('nombre','asc')->paginate(Academico::count());

        return view('investigacion.editColaboradoresPublicacion',compact('academico','publicacion','academicosActuales','academicos'));
    }

    public function updateColaboradoresPublicacion(Request $request,Publicacion $publicacion){
        $publicacion->academicos()->attach($request->academico_id);

        return redirect()->route('investigacion.showPublicacion',$publicacion);
    }

    public function destroyPublicacion(Publicacion $publicacion){
        $academicos = Publicacion::find($publicacion->id)->academicos()->orderBy('id')->get();
        foreach($academicos as $academico){
            $publicacion->academicos()->detach($academico->id);
        }
        $publicacion->delete();
        $publicaciones=Publicacion::orderBy('nombre','asc')->paginate();

        return redirect()->route('investigacion.listaPublicaciones',$publicaciones);
    }

    public function destroyColaboradoresPublicacion(Academico $academico,Publicacion $publicacion){
        $publicacion->academicos()->detach($academico->id);

        return redirect()->route('investigacion.showPublicacion',$publicacion);
    }
}
