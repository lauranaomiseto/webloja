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
        $nomeEndereco=$_POST['nomeEndereco'];
        
        
        $erros= array();
        
        if (strlen(trim($logradouro))== 0){
                $erros['logradouro']="*";
            }
        if (strlen(trim($numero))== 0){
                $erros['numero']="*";
            }
        if (strlen(trim($complemento))== 0){
                $erros['complemento']="*";
            }
        if (strlen(trim($bairro))== 0){
                $erros['bairro']="*";
            }
        if (strlen(trim($cidade))== 0){
                $erros['cidade']="*";
            }
        if (strlen(trim($cep))== 0){
                $erros['cep']="*";
            }
        if (strlen(trim($nomeEndereco))== 0){
                $erros['nomeEndereco']="*";
            }
       
         
            
        if (count($erros)==0){
            $erros['sucesso']= addEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idUsuario, $nomeEndereco);
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
        $nomeEndereco=$_POST['nomeEndereco'];
        
        $erros= array();
        
        if (strlen(trim($logradouro))== 0){
                $erros['logradouro']="*";
            }
        if (strlen(trim($numero))== 0){
                $erros['numero']="*";
            }
        if (strlen(trim($complemento))== 0){
                $erros['complemento']="*";
            }
        if (strlen(trim($bairro))== 0){
                $erros['bairro']="*";
            }
        if (strlen(trim($cidade))== 0){
                $erros['cidade']="*";
            }
        if (strlen(trim($cep))== 0){
                $erros['cep']="*";
            }   
        if (strlen(trim($nomeEndereco))== 0){
                $erros['nomeEndereco']="*";
            }
         
            
        if (count($erros)==0){
            editarEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idEndereco, $nomeEndereco);
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
