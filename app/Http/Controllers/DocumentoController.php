<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDocumento;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class DocumentoController extends Controller
{
    public function index(){
        $reacreditacions=Documento::orderBy('titulo','asc')->where('tipo', "LIKE", 'reacreditacion')->paginate(3);
        $plans=Documento::orderBy('titulo','asc')->where('tipo', "LIKE", 'plan')->paginate(3);
        $otros=Documento::orderBy('titulo','asc')->where('tipo', "LIKE", 'otro')->paginate(3);

        return view('documentos.index',compact('reacreditacions','plans','otros'));
    }

    public function create(){
        return view('documentos.create');
    }

    public function store(StoreDocumento $request){
        $enlace = $request->file('enlace')->store('documentos');
        $url=Storage::url($enlace);

        $archivo = $request->file('enlace');
        $nombre = $archivo->getClientOriginalName();

        $slug=Str::slug($request->titulo,'-');
        $documento=Documento::create([
            'titulo'=>$request->titulo,
            'slug'=>$slug,
            'descripcion'=>$request->descripcion,
            'enlace'=>$url,
            'archivo'=>$nombre,
            'tipo'=>$request->tipo
        ]);

        return redirect()->route('documentos.show',$documento);
    }

    public function reacreditacion(){
        $reacreditacions=Documento::orderBy('titulo','asc')->where('tipo', "LIKE", 'reacreditacion')->paginate(Documento::count());

        return view('documentos.reacreditacion',compact('reacreditacions'));
    }

    public function plan(){
        $plans=Documento::orderBy('titulo','asc')->where('tipo', "LIKE", 'plan')->paginate(Documento::count());

        return view('documentos.plan',compact('plans'));
    }

    public function otro(){
        $otros=Documento::orderBy('titulo','asc')->where('tipo', "LIKE", 'otro')->paginate(Documento::count());

        return view('documentos.otro',compact('otros'));
    }

    public function show(Documento $documento){
        return view('documentos.show',compact('documento'));
    }

    public function edit(Documento $documento){
        return view('documentos.edit',compact('documento'));
    }

    public function update(Request $request,Documento $documento){
        $request->validate([
            'titulo'=>[
                'required',
                Rule::unique('documentos')->ignore($documento),
                'min:10',
                'max:500'
            ],
            'descripcion'=>'required|min:10|max:500',
        ]);
        $slug=Str::slug($request->titulo,'-');
        $documento->update([
            'titulo'=>$request->titulo,
            'slug'=>$slug,
            'descripcion'=>$request->descripcion,
        ]);

        return redirect()->route('documentos.show',$documento);
    }

    public function destroy(Documento $documento){
        $url=str_replace('storage','public',$documento->enlace);
        $documento->delete();
        Storage::delete($url);

        $tipo=$documento->tipo;
        $documento->delete();
        if($tipo=='reacreditacion'){
            return redirect()->route('documentos.reacreditacion');
        }elseif($tipo=='plan'){
            return redirect()->route('documentos.plan');
        }else{
            return redirect()->route('documentos.otro');
        }
    }
}
