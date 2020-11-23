<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNoticia;

class NoticiaController extends Controller
{
    //
    public function index(){
        $noticias=Noticia::orderBy('updated_at','desc')->paginate();

        return view('noticias.index',compact('noticias'));
    }

    public function create(){
        return view('noticias.create');
    }

    public function store(StoreNoticia $request){
        $noticia=Noticia::create($request->all());

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
            'titulo'=>'required',
            'cuerpo'=>'required'
        ]);

        $noticia->update($request->all());

        return redirect()->route('noticias.show',$noticia);
    }

    public function destroy(Noticia $noticia){
        $noticia->delete();

        $noticias=Noticia::orderBy('updated_at','desc')->paginate();

        return view('noticias.index',compact('noticias'));
    }
}
