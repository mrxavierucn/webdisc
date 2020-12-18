<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoticia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class NoticiaController extends Controller
{
    public function index(){
        $noticias=Noticia::orderBy('updated_at','desc')->paginate();

        return view('noticias.index',compact('noticias'));
    }

    public function create(){
        return view('noticias.create');
    }

    public function store(StoreNoticia $request){
        $noticia=Noticia::create($request->all());
        if($request->foto){
            $archivo = $request->file('foto')->store('fotoNoticias');
            $url=Storage::url($archivo);
            $noticia->update([
            'foto'=>$url,
            ]);
        }

        return redirect()->route('noticias.show',$noticia);
    }

    public function show(Noticia $noticia){

        return view('noticias.show',compact('noticia'));
    }

    public function edit(Noticia $noticia){
        return view('noticias.edit',compact('noticia'));
    }

    public function update(Request $request,Noticia $noticia){
        $request->validate([
            'titulo'=>[
                'required',
                Rule::unique('noticias')->ignore($noticia)
            ],
            'cuerpo'=>'required'
        ]);

        $noticia->update($request->all());

        return redirect()->route('noticias.show',$noticia);
    }

    public function destroy(Noticia $noticia){
        $url=str_replace('storage','public',$noticia->foto);
        $noticia->delete();
        Storage::delete($url);

        $noticias=Noticia::orderBy('updated_at','desc')->paginate();

        return view('noticias.index',compact('noticias'));
    }
}
