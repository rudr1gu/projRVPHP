<?php 
namespace App\model;

class Usuario{
    public $nome;
    public $senha;

    public function __construct($nome, $senha){
        $this->nome = $nome;
        $this->senha = $senha;
    }
}