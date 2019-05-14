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