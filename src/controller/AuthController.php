<?php

namespace App\controllers;

class AuthController {
    public function login(){
        echo "login";
    }
}

$loginName = $_GET ['loginName'];
$loginSenha = $_GET ['loginSenha'];

print_r($loginName);
print_r($loginSenha);