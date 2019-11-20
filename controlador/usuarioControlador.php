<?php

require_once "modelo/usuarioModelo.php";
require_once "modelo/enderecoModelo.php";

/** anon */
function cadastroUsuario() {
    if (ehPost()) {
        $nomeCompletoUsuario = $_POST["nomeCompletoUsuario"];
        $cpf = $_POST["cpf"];
        $emailUsuario = $_POST["emailUsuario"];
        $senhaUsuario = $_POST["senhaUsuario"];
        $confirmaSenhaUsuario = $_POST["confirmaSenhaUsuario"];
        $erros = array();

        if (strlen(trim($nomeCompletoUsuario)) == 0) {
            $erros['nome'] = "*";
        }
        if (strlen(trim($cpf)) == 0) {
            $erros['cpf'] = "*";
        }
        if (strlen(trim($emailUsuario)) == 0) {
            $erros['email'] = "*";
        }
        if ((strlen($senhaUsuario) <= 6)) {
            $erros['senha'] = "(deve conter mais de 6 caracteres)";
        }
        if ($senhaUsuario != $confirmaSenhaUsuario) {
            $erros['confirma'] = "*";
        }


        if (count($erros) == 0) {
            $erros['sucesso'] = addUsuario($nomeCompletoUsuario, $cpf, $emailUsuario, $senhaUsuario);
            
            if (acessoUsuarioAdmin()) {
                $dados = array();
                $dados["erros"] = $erros;
                exibir("usuario/cadastroUsuario", $dados);
            } else {
                $usuario = pegarUsuarioPorEmailSenha($emailUsuario, $senhaUsuario);

                if (acessoLogar($usuario)) {
                    alert("bem vindo" . $login);
                    redirecionar("paginas");
                } else {
                    alert("usuario ou senha invalidos!");
                }
            }
        } else {
            $dados = array();
            $dados["erros"] = $erros;
            exibir("usuario/cadastroUsuario", $dados);
        }
    } else {
        exibir("usuario/cadastroUsuario");
    }
}

/** A */
function listarUsuarios() {
    $dados = array();
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listarUsuarios", $dados);
}

/** A */
function verUsuarioId($id) {
    $dados = array();
    $dados["usuario"] = pegarUsuarioId($id);
    $dados["enderecos"] = pegarTodosEnderecosId($id);
    exibir("usuario/detalharUsuario", $dados);
}

/** A, C */
function verUsuarioId2($id) {
    $dados = array();
    $dados["usuario"] = pegarUsuarioId($id);
    $dados["enderecos"] = pegarTodosEnderecosId($id);
    exibir("usuario/detalharUsuario2", $dados);
}

/** A, U */
function deletarU($id) {
    $msg = deletarUsuario($id);
    redirecionar("usuario/listarUsuarios");
}

/** A, C */
function editarU($id) {
    if (ehPost()) {
        $nomeCompletoUsuario = $_POST["nomeCompletoUsuario"];
        $emailUsuario = $_POST["emailUsuario"];
        $cpf = $_POST["cpf"];
        $senhaUsuario = $_POST["senhaUsuario"];
        $confirmaSenhaUsuario = $_POST["confirmaSenhaUsuario"];
        $erros = array();

        if (strlen(trim($nomeCompletoUsuario)) == 0) {
            $erros['nome'] = "*";
        }
        if (strlen(trim($emailUsuario)) == 0) {
            $erros['email'] = "*";
        }
        if ((strlen($senhaUsuario) <= 6)) {
            $erros['senha'] = "(deve conter mais de 6 caracteres)";
        }
        if ($senhaUsuario != $confirmaSenhaUsuario) {
            $erros['confirma'] = "*";
        }


        if (count($erros) == 0) {
            editarUsuario($id, $nomeCompletoUsuario, $cpf, $emailUsuario, $senhaUsuario);
            if (acessoUsuarioAdmin()) {
                redirecionar("usuario/listarUsuarios");
            } elseif (acessoUsuarioCliente()) {
                redirecionar("usuario/minhaConta");
            }
        } else {
            $dados = array();
            $dados["erros"] = $erros;
            exibir("usuario/cadastroUsuario", $dados);
        }
    } else {
        $dados["usuario"] = pegarUsuarioId($id);
        exibir("usuario/cadastroUsuario", $dados);
    }
}

/** A */
function dashAdm() {
    exibir("adm/pagAdm");
}

/** A, C */
function minhaConta() {
    $idUsuario = acessoPegarIdDoUsuario();
    $dados["usuario"] = pegarUsuarioId($idUsuario);
    exibir("cliente/pagCliente", $dados);
}

/** A, C */
function meusEnderecos($idUsuario) {
    $dados["enderecos"] = pegarTodosEnderecosId($idUsuario);
    $dados["idUsuario"] = acessoPegarIdDoUsuario();
    exibir("cliente/meusEnderecos", $dados);
}
