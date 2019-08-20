<?php

require_once "modelo/clienteModelo.php";
require_once "modelo/enderecoModelo.php";

function cadastro(){
    if (ehPost()){
        $nomeCompletoCliente= $_POST["nomeCompletoCliente"];
        $emailCliente= $_POST["emailCliente"];
        $senhaCliente= $_POST["senhaCliente"];
        $confirmaSenhaCliente= $_POST["confirmaSenhaCliente"];
        $erros= array();
        
        if (strlen(trim($nomeCompletoCliente))== 0){
                $erros[]="O campo NOME COMPLETO é obrigatório.<br>";
            }
        if (strlen(trim($emailCliente))== 0){
                $erros[]="O campo EMAIL é obrigatório.<br>";
            }
        if ((strlen($senhaCliente)<=6)||(strlen($senhaCliente)>12)){
                $erros[]="O campo SENHA é obrigatório e deve conter mais de 6 caracteres.<br>";
            }
        if ($senhaCliente != $confirmaSenhaCliente){
                $erros[]="Erro ao confirmar a senha.<br>";
            }
            
            
        if (count($erros)==0){
            $erros[]= addCliente($nomeCompletoCliente, $emailCliente, $senhaCliente);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("cliente/formularioCadastro", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("cliente/formularioCadastro", $dados);
        }
        
    }else{
        exibir("cliente/formularioCadastro");
    }
}


function login(){
    if (ehPost()){
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $contErro=0;
        
        if(strlen(trim($email))== 0){
            echo"Informe um email válido.<br>";
            $contErro=$contErro+1;
        }
        if(strlen($senha)<= 6){
            echo"A senha informada é inválida.<br>";
            $contErro=$contErro+1;
        }
        
        
        
        if ($contErro==0){
            echo"Login realizado com sucesso!";
        }
    }else{
        exibir("login/formularioLogin1");
    }
}




function listarClientes(){
    $dados = array();
    $dados["clientes"]= pegarTodosClientes();
    exibir("cliente/listarClientes", $dados);
    
}



function verClienteId($id){
    $dados= array();
    $dados["cliente"] = pegarClienteId($id);
    $dados["enderecos"] = pegarTodosEnderecosId($id);
    
    exibir("cliente/detalharCliente", $dados);
}



function deletarC($id){
    $msg= deletarCliente($id);
    redirecionar("cliente/listarClientes");
}


function editarC($id){
    if (ehPost()){
        $nomeCompletoCliente= $_POST["nomeCompletoCliente"];
        $emailCliente= $_POST["emailCliente"];
        $senhaCliente= $_POST["senhaCliente"];
        $confirmaSenhaCliente= $_POST["confirmaSenhaCliente"];
        $erros= array();
        
        if (strlen(trim($nomeCompletoCliente))== 0){
                $erros[]="Informe um nome válido.<br>";
            }
        if (strlen(trim($emailCliente))== 0){
                $erros[]="Informe um email válido.<br>";
            }
        if ((strlen($senhaCliente)<=6)||(strlen($senhaCliente)>12)){
                $erros[]="Sua senha deve conter mais de 6 caracteres.<br>";
            }
        if ($senhaCliente != $confirmaSenhaCliente){
                $erros[]="Erro ao confirmar a senha.<br>";
            }
            
            
        if (count($erros)==0){
            editarCliente($id, $nomeCompletoCliente, $emailCliente, $senhaCliente);
            redirecionar("cliente/listarClientes");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("cliente/formularioCadastro", $dados);
        }
        
    }else{
        $dados["cliente"]= pegarClienteId($id);
        exibir("cliente/formularioCadastro", $dados);
    }
}

