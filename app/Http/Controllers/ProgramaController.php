<?php

namespace App\Http\Controllers;

use App\Models\Postgrado;
use App\Models\Pregrado;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function index(){
        return view('programas.index');
    }

    public function create(){
        return view('programas.create');
    }

    public function pregrado(){
        $pregrados=Pregrado::orderBy('nombre','asc')->paginate();

        return view('programas.pregrado',compact('pregrados'));
    }

    public function postgrado(){
        $postgrados=Postgrado::orderBy('nombre','asc')->paginate();

        return view('programas.postgrado',compact('postgrados'));
    }

    public function posttitulo(){
        return view('programas.posttitulo');
    }

    public function showPregrado(Pregrado $pregrado){

        return view('programas.showPregrado',compact('pregrado'));
    }

    public function showPostgrado(Postgrado $postgrado){

        return view('programas.showPostgrado',compact('postgrado'));
    }
}
