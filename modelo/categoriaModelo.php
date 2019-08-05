<?php

function addCategoria($nomeCategoria){
    $comando= "insert into categoria (nomeCategoria) "
            . "values ('$nomeCategoria');";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Categoria cadastrada com sucesso!";
}

function pegarTodasCategorias(){
    $comando= "select * from categoria";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $categorias = array();
    while ($categoria = mysqli_fetch_assoc($resul)){
        $categorias[]=$categoria; 
    }
    return $categorias;
}

function pegarCategoriaId($id){
    $comando="select * from categoria where idCategoria= $id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $categoria= mysqli_fetch_assoc($resul);
    return $categoria;
}


function deletarCategoria($id){
    $comando= "delete from categoria where idCategoria=$id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Categoria deletada";
}

function editarCategoria($id, $nomeCategoria){
    $comando="update categoria set nomeCategoria='$nomeCategoria'where idCategoria='$id';";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Dados atualizados com sucesso!";
}
