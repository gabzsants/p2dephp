<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    private string $nome;
    private string $email;
    private int $assunto;
    private string $mensagem;

    
    public function getNome() : string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }


    public function getEmail() : string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getAssunto() : int {
        return $this->assunto;
    }

    public function setAssunto(int $assunto) {
        $this->assunto = $assunto;
    }

    public function getMensagem() : string {
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem) {
        $this->mensagem = $mensagem;
    }
}


