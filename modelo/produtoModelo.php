<?php
 function addProduto($nomeProduto, $descricaoProduto, $precoProduto, $idCategoria, $imagem){
     $comando="insert into produto (nomeProduto, descricaoProduto, precoProduto, idCategoria, imagem)"
             . "values ('$nomeProduto','$descricaoProduto','$precoProduto', '$idCategoria', '$imagem')";
     $cnx= conn();
     $resul= mysqli_query($cnx, $comando);
     if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
 }
 
 
 function pegarTodosProdutos(){
    $comando="select * from produto";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $produtos = array();
    while ($produto = mysqli_fetch_assoc($resul)){
        $produtos[]=$produto; 
    }
    return $produtos;
}


function pegarProdutoId($id){
    $comando= "select * from produto where idProduto= $id";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $produto= mysqli_fetch_assoc($resul);
    return $produto;
}


function deletarProduto($id){
    $comando= "delete from produto where idProduto= $id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Produto deletado";
}


function editarProduto($id, $nomeProduto, $descricaoProduto, $precoProduto, $imagem){
    $comando="update produto set nomeProduto='$nomeProduto', descricaoProduto='$descricaoProduto', precoProduto='$precoProduto', imagem='$imagem' where idProduto='$id';";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Dados atualizados com sucesso!";
}


function pegarProdutoPesquisa($pesquisa){
    $comando="select * from produto "
            . "inner join categoria on produto.idCategoria=categoria.idCategoria"
            . "where produto.nomeProduto like '%$pesquisa%' or produto.descricaoProduto like '%$pesquisa%' or categoria.nomeCategoria like '%$pesquisa%'";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    $produtos = array();
    while ($produto = mysqli_fetch_assoc($resul)){
        $produtos[]=$produto; 
    }
    return $produtos;
}
