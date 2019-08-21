<?php

require_once "modelo/usuarioModelo.php";
require_once "modelo/enderecoModelo.php";

function cadastroUsuario(){
    if (ehPost()){
        $nomeCompletoUsuario= $_POST["nomeCompletoUsuario"];
        $cpf= $_POST["cpf"];
        $emailUsuario= $_POST["emailUsuario"];
        $senhaUsuario= $_POST["senhaUsuario"];
        $confirmaSenhaUsuario= $_POST["confirmaSenhaUsuario"];
        $erros= array();
        
        if (strlen(trim($nomeCompletoUsuario))== 0){
                $erros[]="O campo NOME COMPLETO é obrigatório.<br>";
            }
        if (strlen(trim($cpf))== 0){
                $erros[]="O campo CPF é obrigatório.<br>";
            }
        if (strlen(trim($emailUsuario))== 0){
                $erros[]="O campo EMAIL é obrigatório.<br>";
            }
        if ((strlen($senhaUsuario)<=6)||(strlen($senhaUsuario)>12)){
                $erros[]="O campo SENHA é obrigatório e deve conter mais de 6 caracteres.<br>";
            }
        if ($senhaUsuario != $confirmaSenhaUsuario){
                $erros[]="Erro ao confirmar a senha.<br>";
            }
            
            
        if (count($erros)==0){
            $erros[]= addUsuario($nomeCompletoUsuario, $cpf, $emailUsuario, $senhaUsuario);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("usuario/cadastroUsuario", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("usuario/cadastroUsuario", $dados);
        }
        
    }else{
        exibir("usuario/cadastroUsuario");
    }
}


function listarUsuarios(){
    $dados = array();
    $dados["usuarios"]= pegarTodosUsuarios();
    exibir("usuario/listarUsuarios", $dados);
    
}



function verUsuarioId($id){
    $dados= array();
    $dados["usuario"] = pegarUsuarioId($id);
    $dados["enderecos"] = pegarTodosEnderecosId($id);
    exibir("usuario/detalharUsuario", $dados);
}



function deletarU($id){
    $msg= deletarUsuario($id);
    redirecionar("usuario/listarUsuarios");
}


function editarU($id){
    if (ehPost()){
        $nomeCompletoUsuario= $_POST["nomeCompletoUsuario"];
        $emailUsuario= $_POST["emailUsuario"];
        $senhaUsuario= $_POST["senhaUsuario"];
        $confirmaSenhaUsuario= $_POST["confirmaSenhaUsuario"];
        $erros= array();
        
        if (strlen(trim($nomeCompletoUsuario))== 0){
                $erros[]="Informe um nome válido.<br>";
            }
        if (strlen(trim($emailUsuario))== 0){
                $erros[]="Informe um email válido.<br>";
            }
        if ((strlen($senhaUsuario)<=6)||(strlen($senhaUsuario)>12)){
                $erros[]="Sua senha deve conter mais de 6 caracteres.<br>";
            }
        if ($senhaUsuario != $confirmaSenhaUsuario){
                $erros[]="Erro ao confirmar a senha.<br>";
            }
            
            
        if (count($erros)==0){
            editarUsuario($id, $nomeCompletoUsuario, $emailUsuario, $senhaUsuario);
            redirecionar("usuario/listarUsuario");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("usuario/cadastroUsuario", $dados);
        }
        
    }else{
        $dados["usuario"]= pegarUsuarioId($id);
        exibir("usuario/cadastroUsuario", $dados);
    }
}

