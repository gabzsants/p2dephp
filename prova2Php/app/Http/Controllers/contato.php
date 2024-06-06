<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contatodb;

class contato extends Controller
{
    public function contato(){
        return view('contato');
    }

public function saveContato(){
    contatodb::create([
        'nome'=> $_POST['nome'],
        'email'=> $_POST['email'],
        'assunto'=> (int) $_POST['assunto'],
        'mensagem'=> $_POST['mensagem']
    ]);
    
    return view('contato');
}
}
