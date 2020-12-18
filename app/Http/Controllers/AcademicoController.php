<?php

namespace App\Http\Controllers;

use App\Models\Academico;
use App\Http\Requests\StoreAcademico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class AcademicoController extends Controller
{
    public function index(){
        return view('academicos.index');
    }

    public function create(){
        return view('academicos.create');
    }

    public function store(StoreAcademico $request){
        $slug=Str::slug($request->nombre,'-');
        $academico=Academico::create([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'rol'=>$request->rol,
            'permanencia'=>$request->permanencia
        ]);
        if($request->foto){
            $archivo = $request->file('foto')->store('fotoAcademico');
            $url=Storage::url($archivo);
            $academico->update([
                'foto'=>$url,
            ]);
        }

        return redirect()->route('academicos.show',$academico);
    }

    public function permanente(){
        $academicos=Academico::orderBy('nombre','asc')->paginate(Academico::count());

        return view('academicos.permanente',compact('academicos'));
    }

    public function temporal(){
        $academicos=Academico::orderBy('nombre','asc')->paginate(Academico::count());

        return view('academicos.temporal',compact('academicos'));
    }

    public function apoyo(){
        $academicos=Academico::orderBy('nombre','asc')->paginate(Academico::count());

        return view('academicos.apoyo',compact('academicos'));
    }

    public function show(Academico $academico){
        return view('academicos.show',compact('academico'));
    }

    public function edit(Academico $academico){
        return view('academicos.edit',compact('academico'));
    }

    public function update(Request $request,Academico $academico){
        $request->validate([
            'nombre'=>[
                'required',
                Rule::unique('academicos')->ignore($academico),
                'min:10',
                'max:150'
            ],
            'rol'=>'max:50',
            'foto'=>'image'
        ]);

        $academico->update($request->all());

        return redirect()->route('academicos.show',$academico);
    }

    public function destroy(Academico $academico){
        $url=str_replace('storage','public',$academico->foto);
        Storage::delete($url);

        $permanencia=$academico->permanencia;
        $academico->delete();
        if($permanencia=='permanente'){
            return redirect()->route('academicos.permanente');
        }elseif($permanencia=='temporal'){
            return redirect()->route('academicos.temporal');
        }else{
            return redirect()->route('academicos.apoyo');
        }
    }
}
