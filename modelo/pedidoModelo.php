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
    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        $produto = $_SESSION["carrinho"][$i];
        $id = $produto["idProduto"];
        $quantidade = $produto["quantidade"];
        $comando = "insert into pedido_produto values ('$id','$idPedido','$quantidade')";
        $cnx = conn();
        $resul = mysqli_query($cnx, $comando);
        if (!$resul) {
            die(mysqli_error($cnx));
        }
    }
}

function pegarPedidoIdUsuario($id){
    $comando= "select pedido.idPedido, pedido.dataCompra, formaPagamento.descricao"
            . " from pedido"
            . " inner join formaPagamento on pedido.idFormaPagamento=formaPagamento.idFormaPagamento"
            . " where pedido.idUsuario=$id";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)){
        $pedidos[]=$pedido; 
    }
    return $pedidos;
}
