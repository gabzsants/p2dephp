<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaInicial extends Controller
{
    public function paginainicial(){
        return view('paginainicial');
    }
    public function redirect(){
        return redirect()->route('site.index');
    }
}
