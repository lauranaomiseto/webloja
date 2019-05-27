<?php
 function addProduto($nomeProduto, $descricaoProduto, $precoProduto){
     $comando="insert into produto (nomeProduto, descricaoProduto, precoProduto)"
             . "values ('$nomeProduto','$descricaoProduto','$precoProduto')";
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
    while ($produto = mysqli_fetch_assoc($resul)){
        $produtos[]=$produto; 
    }
    return $produtos;
}