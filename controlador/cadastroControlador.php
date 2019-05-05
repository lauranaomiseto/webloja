<?php

function index(){
    if (ehPost()){
        $nomeCliente= $_POST["nomeCliente"];
        $emailCliente= $_POST["emailCliente"];
        $senhaCliente= $_POST["senhaCliente"];
        $confirmaSenhaCliente= $_POST["confirmaSenhaCliente"];
        
    
        if (strlen(trim($nomeCliente))== 0){
                echo"Informe um nome válido.<br>";
            }
        if (strlen(trim($emailCliente))== 0){
                echo"Informe um email válido.<br>";
            }
        if (strlen($senhaCliente)<=6){
                echo"Sua senha deve conter mais de 6 caracteres.<br>";
            }
        if ($senhaCliente != $confirmaSenhaCliente){
                echo"Erro ao confirmar a senha.<br>";
            }
        
    }else{
        exibir("login/formularioCadastro");
    }
}