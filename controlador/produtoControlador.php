<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

function visualizar(){
    $passarDados= array();
    $passarDados['nome']= "Kahuna";
    $passarDados['descricao']= "Hambúrguer de 200g de fraldinha, pão preto (australiano), mix de cogumelos, queijo cheddar e maionese de ervas.";
    $passarDados['preco']= "20,00";
    
    exibir("produtos/visualizar", $passarDados);
}


function adicionar(){
    if (ehPost()){
        $nomeProduto=$_POST['nomeProduto'];
        $descricaoProduto=$_POST['descricaoProduto'];
        $precoProduto=$_POST['precoProduto'];
        $idCategoria=$_POST['categoriaProduto'];
        
        $erros= array();
        
        if (strlen(trim($nomeProduto))== 0){
                $erros[]="O campo NOME é obrigatório.<br>";
            }
        if (strlen(trim($descricaoProduto))== 0){
                $erros[]="O campo DEESCRIÇÃO é obrigatório.<br>";
            }
        if (strlen(trim($precoProduto))==0){
                $erros[]="O campo PREÇO é obrigatório.<br>";
            }
        if ($idCategoria=="verificação"){
            $erros[]="Selecione uma CATEGORIA.<br>";
        }
            
        if (count($erros)==0){
            $erros[]= addProduto($nomeProduto, $descricaoProduto, $precoProduto, $idCategoria);
            $dados= array();
            $dados["erros"]= $erros;
            $dados["categorias"]= pegarTodasCategorias();
            exibir("produtos/cadastroProduto", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("produtos/cadastroProduto", $dados);
        }
        
    }else{
        $dados["categorias"]= pegarTodasCategorias();
        exibir("produtos/cadastroProduto", $dados);
    }
    
}


function listarProdutos(){
    $dados= array();
    $dados["produtos"]= pegarTodosProdutos();
    exibir("produtos/listarProdutos", $dados);
}


function verProdutoId($id){
    $dados= array();
    $dados["produto"]= pegarProdutoId($id);
    exibir("produtos/detalharProduto", $dados);
}


function deletarP($id){
    $msg= deletarProduto($id);
    redirecionar("produto/listarProdutos");
}


function editarP($id){
    if (ehPost()){
        $nomeProduto=$_POST['nomeProduto'];
        $descricaoProduto=$_POST['descricaoProduto'];
        $precoProduto=$_POST['precoProduto'];
        $erros= array();
        
        if (strlen(trim($nomeProduto))== 0){
                $erros[]="O campo NOME é obrigatório.<br>";
            }
        if (strlen(trim($descricaoProduto))== 0){
                $erros[]="O campo DEESCRIÇÃO é obrigatório.<br>";
            }
        if (strlen(trim($precoProduto))==0){
                $erros[]="O campo PREÇO é obrigatório.<br>";
            }
            
        if (count($erros)==0){
            editarProduto($id, $nomeProduto, $descricaoProduto, $precoProduto);
            redirecionar("produto/listarProdutos");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("produtos/cadastroProduto", $dados);
        }
        
    }else{
        $dados["produto"]= pegarProdutoId($id);
        exibir("produtos/cadastroProduto", $dados);
    }
}


