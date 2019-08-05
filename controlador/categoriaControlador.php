<?php

require_once "modelo/categoriaModelo.php";

function adicionarCategoria(){
    if (ehPost()){
        $nomeCategoria=$_POST['nomeCategoria'];
        $erros= array();
        
        if (strlen(trim($nomeCategoria))== 0){
                $erros[]="O campo CATEGORIA é obrigatório.<br>";
            }
            
        if (count($erros)==0){
            $erros[]= addCategoria($nomeCategoria);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("categoria/cadastroCategoria", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("categoria/cadastroCategoria", $dados);
        }
        
    }else{
        exibir("categoria/cadastroCategoria");
    }
}


function listarCategorias(){
    $dados= array();
    $dados["categorias"]= pegarTodasCategorias();
    exibir("categoria/listarCategorias", $dados);
}


function verCategoriaId($id){
    $dados= array();
    $dados["categoria"]= pegarCategoriaId($id);
    exibir("categoria/detalharCategoria", $dados);
}


function deletarC($id){
    $msg= deletarCategoria($id);
    redirecionar("categoria/listarCategorias");
}


function editarC($id){
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
            editarCategoria($id, $nomeCategoria, $descricaoCategoria);
            redirecionar("categoria/listarCategorias");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("categoria/cadastroCategoria", $dados);
        }
        
    }else{
        $dados["categoria"]= pegarCategoriaId($id);
        exibir("categoria/cadastroCategoria",  $dados);
    }
}