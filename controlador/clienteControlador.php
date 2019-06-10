<?php

require_once "modelo/clienteModelo.php";

function cadastro(){
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
            $erros[]= addCliente($nomeCompletoCliente, $emailCliente, $senhaCliente);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("login/formularioCadastro", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("login/formularioCadastro", $dados);
        }
        
    }else{
        exibir("login/formularioCadastro");
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




function newsLetter(){
    if (ehPost()){
        $email=$_POST['emailNewsLetter'];
        $erros= array();
        
        if(strlen(trim($email))==0){
            $erros[]="Email inválido";
        }
        if (count($erros)==0){
            $erros[] = newsLetterModelo($email);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("login/formularioNewsLetter", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("login/formularioCadastro", $dados);
        }
    }else{
        exibir("login/formularioNewsLetter");
    }
}



function listarClientes(){
    $dados = array();
    $dados["clientes"]= pegarTodosClientes();
    exibir("usuario/listarClientes", $dados);
    
}



function listarNewsLetters(){
    $dados = array();
    $dados["newsLetters"]= pegarTodasNewsLetters();
    exibir("usuario/listarNewsLetters", $dados);
}



function verClienteId($id){
    $dados= array();
    $dados["cliente"] = pegarClienteId($id);
    exibir("usuario/detalharCliente", $dados);
}



function deletarC($id){
    $msg= deletarCliente($id);
    redirecionar("cliente/listarClientes");
}

function deletarN($email){
    $msg= deletarNewsLetter($email);
    redirecionar("cliente/listarNewsLetters");
}