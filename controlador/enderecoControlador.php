<?php
require_once "modelo/enderecoModelo.php";

/** A, C */
function adicionarEndereco($idUsuario){
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
            $erros[]= addEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idUsuario);
            $dados= array();
            $dados["erros"]= $erros;
            $dados["idUsuario"]=$idUsuario;
            exibir("endereco/cadastroEndereco", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            $dados["idUsuario"]=$idUsuario;
            exibir("endereco/cadastroEndereco", $dados);
        }
        
    }else{
        $dados["idUsuario"]=$idUsuario;
        exibir("endereco/cadastroEndereco", $dados);
    }
    
}


/** A, C */
function verEnderecoId($idEndereco, $idUsuario){
    $dados= array();
    $dados['endereco']= pegarEnderecoId($idEndereco);
    $dados['idUsuario']= $idUsuario;
    exibir("endereco/detalharEndereco", $dados);
}

/** A, C */
function deletarE($idEndereco){
    $msg = deletarEndereco($idEndereco);
    redirecionar("usuario/listarUsuarios");
}


/** A, C */
function editarE($idEndereco, $idUsuario){
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
            editarEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idEndereco);
            redirecionar("usuario/listarUsuarios");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            $dados['idUsuario']= $idUsuario;
            exibir("endereco/cadastroEndereco", $dados);
        }
        
    }else{
        $dados["endereco"]= pegarEnderecoId($idEndereco);
        $dados['idUsuario']= $idUsuario;
        exibir("endereco/cadastroEndereco", $dados);
    }
}
