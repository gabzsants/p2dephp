<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroDonut extends Model
{
    private string $nome;
    private string $sabor;
    private string $descricao;
    private string $preco;
    private string $imagem;


    
    public function getNome() : string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }


    public function getSabor() : string {
        return $this->sabor;
    }

    public function setSabor(string $sabor) {
        $this->sabor = $sabor;
    }

    public function getDescricao() : string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

    public function getPreco() : string {
        return $this->preco;
    }

    public function setPreco(string $preco) {
        $this->preco = $preco;
    }

    public function getImagem() : string {
        return $this->imagem;
    }

    public function setImagem(string $imagem) {
        $this->imagem = $imagem;
    }


}

