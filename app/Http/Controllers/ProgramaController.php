<?php

namespace App\Http\Controllers;

use App\Models\Postgrado;
use App\Models\Pregrado;
use App\Models\Posttitulo;
use App\Http\Requests\StorePregrado;
use App\Http\Requests\StorePostgrado;
use App\Http\Requests\StorePosttitulo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProgramaController extends Controller
{
    public function index(){
        $pregrados=Pregrado::orderBy('nombre','asc')->paginate(2);
        $postgrados=Postgrado::orderBy('nombre','asc')->paginate(2);
        $posttitulos=Posttitulo::orderBy('nombre','asc')->paginate(2);

        return view('programas.index',compact('pregrados','postgrados','posttitulos'));
    }

    public function pregrado(){
        $pregrados=Pregrado::orderBy('nombre','asc')->paginate(Pregrado::count());

        return view('programas.pregrado',compact('pregrados'));
    }

    public function createPregrado(){
        return view('programas.createPregrado');
    }

    public function storePregrado(StorePregrado $request){
        $slug=Str::slug($request->nombre,'-');
        $pregrado=Pregrado::create([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'jefe'=>$request->jefe,
            'titulo'=>$request->titulo,
            'gradoAcademico'=>$request->gradoAcademico,
            'area'=>$request->area,
            'subarea'=>$request->subarea,
            'duracion'=>$request->duracion,
            'acreditacion'=>$request->acreditacion,
            'perfilEgresado'=>$request->perfilEgresado,
            'url'=>''
        ]);
        if($request->url){
            $pregrado->update([
                'url'=>$request->url,
            ]);
        }

        return redirect()->route('programas.showPregrado',$pregrado);
    }

    public function showPregrado(Pregrado $pregrado){

        return view('programas.showPregrado',compact('pregrado'));
    }

    public function editPregrado(Pregrado $pregrado){
        return view('programas.editPregrado',compact('pregrado'));
    }

    public function updatePregrado(Request $request,Pregrado $pregrado){
        $request->validate([
            'nombre'=>[
                'required',
                Rule::unique('pregrados')->ignore($pregrado),
                'min:10',
                'max:200'
            ],
            'jefe'=>'required|min:10|max:150',
            'titulo'=>[
                'required',
                Rule::unique('pregrados')->ignore($pregrado),
                'min:10',
                'max:150'
            ],
            'gradoAcademico'=>'required|min:10|max:150',
            'area'=>'required|min:10|max:150',
            'subarea'=>'required|min:10|max:200',
            'duracion'=>'required|integer',
            'acreditacion'=>'required|min:10|max:150',
            'perfilEgresado'=>'required|min:10|max:2000',
        ]);
        $slug=Str::slug($request->nombre,'-');

        $pregrado->update([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'jefe'=>$request->jefe,
            'titulo'=>$request->titulo,
            'gradoAcademico'=>$request->gradoAcademico,
            'area'=>$request->area,
            'subarea'=>$request->subarea,
            'duracion'=>$request->duracion,
            'acreditacion'=>$request->acreditacion,
            'perfilEgresado'=>$request->perfilEgresado,
            'url'=>'',
        ]);
        if($request->url){
            $pregrado->update([
                'url'=>$request->url,
            ]);
        }
        return redirect()->route('programas.showPregrado',$pregrado);
    }

    public function destroyPregrado(Pregrado $pregrado){
        $pregrado->delete();

        return redirect()->route('programas.pregrado');
    }

    public function postgrado(){
        $postgrados=Postgrado::orderBy('nombre','asc')->paginate(Postgrado::count());

        return view('programas.postgrado',compact('postgrados'));
    }

    public function createPostgrado(){
        return view('programas.createPostgrado');
    }

    public function storePostgrado(StorePostgrado $request){
        $slug=Str::slug($request->nombre,'-');
        $postgrado=Postgrado::create([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'director'=>$request->director,
            'descripcion'=>$request->descripcion,
            'duracion'=>$request->duracion,
            'url'=>''
        ]);
        if($request->url){
            $postgrado->update([
                'url'=>$request->url,
            ]);
        }

        return redirect()->route('programas.showPostgrado',$postgrado);
    }

    public function showPostgrado(Postgrado $postgrado){
        return view('programas.showPostgrado',compact('postgrado'));
    }

    public function editPostgrado(Postgrado $postgrado){
        return view('programas.editPostgrado',compact('postgrado'));
    }

    public function updatePostgrado(Request $request,Postgrado $postgrado){
        $request->validate([
            'nombre'=>[
                'required',
                Rule::unique('postgrados')->ignore($postgrado),
                'min:10',
                'max:200'
            ],
            'director'=>'required|min:10|max:150',
            'descripcion'=>'required|min:10|max:1500',
            'duracion'=>'required|integer',
        ]);

        $slug=Str::slug($request->nombre,'-');

        $postgrado->update([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'director'=>$request->director,
            'descripcion'=>$request->descripcion,
            'duracion'=>$request->duracion,
            'url'=>''
        ]);
        if($request->url){
            $postgrado->update([
                'url'=>$request->url,
            ]);
        }

        return redirect()->route('programas.showPostgrado',$postgrado);
    }

    public function destroyPostgrado(Postgrado $postgrado){
        $postgrado->delete();

        return redirect()->route('programas.postgrado');
    }

    public function posttitulo(){
        $posttitulos=Posttitulo::orderBy('nombre','asc')->paginate(Posttitulo::count());

        return view('programas.posttitulo',compact('posttitulos'));
    }

    public function createPosttitulo(){
        return view('programas.createPosttitulo');
    }

    public function storePosttitulo(StorePosttitulo $request){
        $slug=Str::slug($request->nombre,'-');
        $posttitulo=Posttitulo::create([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'coordinador'=>$request->coordinador,
            'descripcion'=>$request->descripcion,
            'duracion'=>$request->duracion,
            'cuerpo'=>'',
            'malla'=>'',
        ]);
        if($request->malla){
            $archivo = $request->file('malla')->store('mallaPosttitulo');
            $url=Storage::url($archivo);
            $posttitulo->update([
                'malla'=>$url,
            ]);
        }

        return redirect()->route('programas.showPosttitulo',$posttitulo);
    }

    public function showPosttitulo(Posttitulo $posttitulo){
        return view('programas.showPosttitulo',compact('posttitulo'));
    }

    public function editPosttitulo(Posttitulo $posttitulo){
        return view('programas.editPosttitulo',compact('posttitulo'));
    }

    public function updatePosttitulo(Request $request,Posttitulo $posttitulo){
        $request->validate([
            'nombre'=>[
                'required',
                Rule::unique('posttitulos')->ignore($posttitulo),
                'min:10',
                'max:200'
            ],
            'coordinador'=>'required|min:10|max:150',
            'descripcion'=>'required|min:10|max:1500',
            'duracion'=>'required|integer',
        ]);
        $slug=Str::slug($request->nombre,'-');

        $posttitulo->update([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'coordinador'=>$request->coordinador,
            'descripcion'=>$request->descripcion,
            'duracion'=>$request->duracion,
            'malla'=>$request->malla,
            'cuerpo'=>$request->cuerpo,
        ]);

        return redirect()->route('programas.showPosttitulo',$posttitulo);
    }

    public function destroyPosttitulo(Posttitulo $posttitulo){
        $posttitulo->delete();

        return redirect()->route('programas.posttitulo');
    }

}
