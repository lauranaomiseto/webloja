<?php

function index(){
    if (ehPost()){
        $nomeCliente= $_POST["nomeCliente"];
        $emailCliente= $_POST["emailCliente"];
        $senhaCliente= $_POST["senhaCliente"];
        $confirmaSenhaCliente= $_POST["confirmaSenhaCliente"];
        $contErro=0;
    
        if (strlen(trim($nomeCliente))== 0){
                echo"Informe um nome válido.<br>";
                $contErro=$contErro+1;
            }
        if (strlen(trim($emailCliente))== 0){
                echo"Informe um email válido.<br>";
                $contErro=$contErro+1;
            }
        if (strlen($senhaCliente)<=6){
                echo"Sua senha deve conter mais de 6 caracteres.<br>";
                $contErro=$contErro+1;
            }
        if ($senhaCliente != $confirmaSenhaCliente){
                echo"Erro ao confirmar a senha.<br>";
                $contErro=$contErro+1;
            }
            
            
            
        if ($contErro==0){
            echo"Cadastro realizado com sucesso!";
        }
        
    }else{
        exibir("login/formularioCadastro");
    }
}