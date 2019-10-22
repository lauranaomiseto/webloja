<?php

function addPedido($idUsuario, $idEndereco, $idFormaPagamento) {
    $comando = "insert into pedido (idUsuario, idEndereco, idFormapagamento, dataCompra)"
            . "values ('$idUsuario','$idEndereco','$idFormaPagamento', curdate())";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    if (!$resul) {
        die(mysqli_error($cnx));
    }
    $idPedido = mysqli_insert_id($cnx);
    
    
    
    return 'Pedido salvo com sucesso com sucesso!';
}


for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
    $id = $_SESSION["carrinho"][$i];
    $comando = "insert into pedido_produto values ('$id','$idPedido','$quantidade')";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    if (!$resul) {
        die(mysqli_error($cnx));
    }
}