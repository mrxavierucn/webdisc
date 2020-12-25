<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke(){
        return view('home');
    }

    public function historia(){
        return view('historia');
    }

    public function contacto(){
        return view('contacto');
    }
}
