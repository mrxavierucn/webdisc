<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicoController extends Controller
{
    public function index(){
        return view('academicos.index');
    }

    public function permanente(){
        return view('academicos.permanente');
    }

    public function temporal(){
        return view('academicos.temporal');
    }

    public function apoyo(){
        return view('academicos.apoyo');
    }
}
