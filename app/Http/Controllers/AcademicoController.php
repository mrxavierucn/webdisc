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
        $oficiales=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'oficial')->paginate(3);
        $especiales=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'especial')->paginate(3);
        $temporales=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'temporal')->paginate(3);
        $apoyos=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'apoyo')->paginate(3);

        return view('academicos.index',compact('oficiales','especiales','temporales','apoyos'));
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
            'correo'=>$request->correo,
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

    public function oficial(){
        $oficiales=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'oficial')->paginate(Academico::count());

        return view('academicos.oficial',compact('oficiales'));
    }

    public function especial(){
        $especiales=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'especial')->paginate(Academico::count());

        return view('academicos.especial',compact('especiales'));
    }

    public function temporal(){
        $temporales=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'temporal')->paginate(Academico::count());

        return view('academicos.temporal',compact('temporales'));
    }

    public function apoyo(){
        $apoyos=Academico::orderBy('nombre','asc')->where('permanencia', "LIKE", 'apoyo')->paginate(Academico::count());

        return view('academicos.apoyo',compact('apoyos'));
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
            'correo'=>[
                'required',
                Rule::unique('academicos')->ignore($academico),
            ],
            'foto'=>'image'
        ]);
        $slug=Str::slug($request->nombre,'-');
        $academico->update([
            'nombre'=>$request->nombre,
            'slug'=>$slug,
            'rol'=>$request->rol,
            'correo'=>$request->correo,
            'permanencia'=>$request->permanencia
        ]);

        return redirect()->route('academicos.show',$academico);
    }

    public function destroy(Academico $academico){
        $url=str_replace('storage','public',$academico->foto);
        Storage::delete($url);

        $permanencia=$academico->permanencia;
        $academico->delete();
        if($permanencia=='oficial'){
            return redirect()->route('academicos.oficial');
        }elseif($permanencia=='especial'){
            return redirect()->route('academicos.especial');
        }elseif($permanencia=='temporal'){
            return redirect()->route('academicos.temporal');
        }else{
            return redirect()->route('academicos.apoyo');
        }
    }
}
