<?php

function addPedido($idUsuario, $idEndereco, $idFormaPagamento) {
    $comando = "call prc_adicionarPedido($idUsuario, $idEndereco, $idFormaPagamento)";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    if (!$resul) {
        die(mysqli_error($cnx));
    }
    
    
    $resultado = mysqli_fetch_assoc($resul);
    var_dump($resultado);
    
    $idPedido = mysqli_insert_id($cnx);
    echo $idPedido;
    die;
    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        $produto = $_SESSION["carrinho"][$i];
        $id = $produto["idProduto"];
        $quantidade = $produto["quantidade"];
        $comando = "call prc_adicionarPedidoProduto($id, $idPedido, $quantidade)";
        $cnx = conn();
        $resul = mysqli_query($cnx, $comando);
        if (!$resul) {
            die(mysqli_error($cnx));
        }
    }
}

function pegarPedidoIdUsuario($id){
    $comando= "call prc_pegarPedidoIdUsuario($id)";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)){
        $pedidos[]=$pedido; 
    }
    return $pedidos;
}


