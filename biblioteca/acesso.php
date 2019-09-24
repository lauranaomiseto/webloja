<?php

define('ACESSO', true);

function acessoLogar($usuario) {
    if(!empty($usuario)) { //se o usuario não for vazio, logo existe o usuário na base com as credenciais
        $_SESSION["acesso"] = array( //cria a sessao acesso com os dados do usuario
            "email" => $usuario["email"], 
            "tipoUsuario" => $usuario["tipoUsuario"]
        );
        return true; 
    }
    return false;
}

function acessoDeslogar() {
    if (isset($_SESSION["acesso"])) {
        $_SESSION["acesso"] = null;
        unset($_SESSION["acesso"]);
    }
}

function acessoUsuarioEstaLogado() {
    return isset($_SESSION["acesso"]);
}

function acessoPegarPapelDoUsuario() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["acesso"]["tipoUsuario"];
    }
}

function acessoUsuarioAdmin() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["acesso"]["tipoUsuario"] == "A";
    }
    return false;
}

function acessoPegarUsuarioLogado() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["acesso"]["email"];
    }   
}
