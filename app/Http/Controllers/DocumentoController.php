<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDocumento;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DocumentoController extends Controller
{
    public function index(){
        return view('documentos.index');
    }

    public function create(){
        return view('documentos.create');
    }

    public function store(StoreDocumento $request){
        $enlace = $request->file('enlace')->store('documentos');
        $url=Storage::url($enlace);

        $archivo = $request->file('enlace');
        $nombre = $archivo->getClientOriginalName();

        $documento=Documento::create([
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion,
            'enlace'=>$url,
            'archivo'=>$nombre,
            'tipo'=>$request->tipo
        ]);

        return redirect()->route('documentos.show',$documento);
    }

    public function reacreditacion(){
        $documentos=Documento::orderBy('titulo','asc')->paginate(Documento::count());

        return view('documentos.reacreditacion',compact('documentos'));
    }

    public function plan(){
        $documentos=Documento::orderBy('titulo','asc')->paginate(Documento::count());

        return view('documentos.plan',compact('documentos'));
    }

    public function otro(){
        $documentos=Documento::orderBy('titulo','asc')->paginate(Documento::count());

        return view('documentos.otro',compact('documentos'));
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
                Rule::unique('documentos')->ignore($documento)
            ],
            'descripcion'=>'required'
        ]);

        $documento->update($request->all());

        return redirect()->route('documentos.show',$documento);
    }

    public function destroy(Documento $documento){
        $url=str_replace('storage','public',$documento->enlace);
        $documento->delete();
        Storage::delete($url);

        return redirect()->route('documentos');
    }
}
