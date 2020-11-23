<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index(){
        $documentos=Documento::orderBy('updated_at','desc')->paginate();

        return view('documentos.index',compact('documentos'));
    }

    public function show(Documento $documento){

        return view('documentos.show',compact('documento'));
    }
}
