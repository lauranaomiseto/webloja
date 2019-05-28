<?php

require_once "modelo/clienteModelo.php";

function cadastro(){
    if (ehPost()){
        $nomeCompletoCliente= $_POST["nomeCompletoCliente"];
        $emailCliente= $_POST["emailCliente"];
        $senhaCliente= $_POST["senhaCliente"];
        $confirmaSenhaCliente= $_POST["confirmaSenhaCliente"];
        $contErro=0;
    
        if (strlen(trim($nomeCompletoCliente))== 0){
                echo"Informe um nome válido.<br>";
                $contErro=$contErro+1;
            }
        if (strlen(trim($emailCliente))== 0){
                echo"Informe um email válido.<br>";
                $contErro=$contErro+1;
            }
        if ((strlen($senhaCliente)<=6)||(strlen($senhaCliente)>12)){
                echo"Sua senha deve conter mais de 6 caracteres.<br>";
                $contErro=$contErro+1;
            }
        if ($senhaCliente != $confirmaSenhaCliente){
                echo"Erro ao confirmar a senha.<br>";
                $contErro=$contErro+1;
            }
            
            
        if ($contErro==0){
            $mensagem= addCliente($nomeCompletoCliente, $emailCliente, $senhaCliente);
            echo $mensagem;
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
        $contErro=0;
        
        if(strlen(trim($email))==0){
            echo"Email inválido";
            $contErro=$cotErro+1;
        }
        if ($contErro==0){
            $mensagem = newsLetterModelo($email);
            echo $mensagem;
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

