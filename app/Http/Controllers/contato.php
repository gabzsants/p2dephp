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
    return redirect()->route('site.exibirdados');

}

public function exibir()
{
    $contatodbs = Contatodb::all(); 
    return view('exibirdados', compact('contato'));
}


public function editar($id){
    $contatodb = Contatodb::find($id);
    return view('editar', compact('contato'));
}

public function atualizar(Request $request, $id)
{
    $validatedData = $request->validate([
        'nome' => 'required|string',
        'email' => 'required|string',
        'assunto' => 'required|integer',
        'mensagem' => 'required|text'
    ]);

    $contatodb = Contatodb::findOrFail($id);

    $contatodb->atualizar($validatedData);
    $contatodb->save();

    return redirect()->route('contato.exibirdados')->with('success', 'Mensagem de contato alterada');
}


    public function deletar($id)
{
    $contatodb = Contatodb::findOrFail($id);
    $contatodb->delete();
    return redirect()->route('site.contato')->with('success', 'Mensagem de contato deletada');
}

}
   