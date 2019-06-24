<?php

require_once "modelo/produtoModelo.php";

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
            $erros[]= addProduto($nomeProduto, $descricaoProduto, $precoProduto);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("produtos/cadastroProduto", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("produtos/cadastroProduto", $dados);
        }
        
    }else{
        exibir("produtos/cadastroProduto");
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
    redirecionar("produtos/listarProdutos");
}


function adicionarCategoria(){
    if (ehPost()){
        $nomeCategoria=$_POST['nomeCategoria'];
        $descricaoCategoria=$_POST['descricaoCategoria'];
        $erros= array();
        
        if (strlen(trim($nomeCategoria))== 0){
                $erros[]="O campo NOME é obrigatório.<br>";
            }
        if (strlen(trim($descricaoCategoria))== 0){
                $erros[]="O campo DEESCRIÇÃO é obrigatório.<br>";
            }
            
        if (count($erros)==0){
            $erros[]= addCategoria($nomeCategoria, $descricaoCategoria);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("produtos/cadastroCategorias", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("produtos/cadastroCategorias", $dados);
        }
        
    }else{
        exibir("produtos/cadastroCategorias");
    }
}


function listarCategorias(){
    $dados= array();
    $dados["categorias"]= pegarTodasCategorias();
    exibir("produtos/listarCategorias", $dados);
}


function verCategoriaId($id){
    $dados= array();
    $dados["categoria"]= pegarCategoriaId($id);
    exibir("produtos/detalharCategorias", $dados);
}


function deletarC($id){
    $msg= deletarCategoria($id);
    redirecionar("produtos/listarCategorias");
}
