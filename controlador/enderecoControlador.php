<?php
require_once "modelo/enderecoModelo.php";

function adicionarEndereco($idCliente){
    if (ehPost()){
        $logradouro=$_POST['logradouro'];
        $numero=$_POST['numero'];
        $complemento=$_POST['complemento'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $cep=$_POST['cep'];
        
        
        $erros= array();
        
        if (strlen(trim($logradouro))== 0){
                $erros[]="O campo LOGRADOURO é obrigatório.<br>";
            }
        if (strlen(trim($numero))== 0){
                $erros[]="O campo NÚMERO é obrigatório.<br>";
            }
        if (strlen(trim($complemento))== 0){
                $erros[]="O campo COMPLEMENTO é obrigatório.<br>";
            }
        if (strlen(trim($bairro))== 0){
                $erros[]="O campo BAIRRO é obrigatório.<br>";
            }
        if (strlen(trim($cidade))== 0){
                $erros[]="O campo CIDADE é obrigatório.<br>";
            }
        if (strlen(trim($cep))== 0){
                $erros[]="O campo CEP é obrigatório.<br>";
            }   
         
            
        if (count($erros)==0){
            $erros[]= addEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idCliente);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("endereco/cadastroEndereco", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("endereco/cadastroEndereco", $dados);
        }
        
    }else{
        exibir("endereco/cadastroEndereco");
    }
    
}