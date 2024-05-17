<?php

namespace App\controllers;

use App\model\Usuario;

class AuthController {
    public function login(){
        echo "login";
    }
}

$loginName = $_GET ['usuario'];
$loginSenha = $_GET ['senha'];

// $usuario1 = new Usuario($loginName, $loginSenha);

// print_r($usuario1->nome);

// $usuario = $_POST['usuario'];
// $senha = $_POST['senha'];

print_r($loginName . "<br>"); 
print_r($loginSenha);