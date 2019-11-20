<?php

require_once "modelo/categoriaModelo.php";

/** A */
function adicionarCategoria(){
    if (ehPost()){
        $nomeCategoria=$_POST['nomeCategoria'];
        $erros= array();
        
        if (strlen(trim($nomeCategoria))== 0){
                $erros['categoria']="*";
            }
            
        if (count($erros)==0){
            $erros['sucesso']= addCategoria($nomeCategoria);
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

/** A */
function listarCategorias(){
    $dados= array();
    $dados["categorias"]= pegarTodasCategorias();
    exibir("categoria/listarCategorias", $dados);
}

/** A */
function verCategoriaId($id){
    $dados= array();
    $dados["categoria"]= pegarCategoriaId($id);
    exibir("categoria/detalharCategoria", $dados);
}

/** A */
function deletarC($id){
    $msg= deletarCategoria($id);
    redirecionar("categoria/listarCategorias");
}

/** A */
function editarC($id){
    if (ehPost()){
        $nomeCategoria=$_POST['nomeCategoria'];
        $erros= array();
        
        if (strlen(trim($nomeCategoria))== 0){
                $erros['categoria']="*";
            }
            
        if (count($erros)==0){
            editarCategoria($id, $nomeCategoria);
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