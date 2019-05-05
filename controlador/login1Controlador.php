<?php
 
function index(){
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

