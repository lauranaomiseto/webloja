<?php

function fecharPedido(){
    $comando="insert into pedido (idUsuario, idEndereco, idFormapagamento, dataCompra)"
             . "values ('$idUsuario','$idEndereco','$idFormaPagamento', 'now()')";
     $cnx= conn();
     $resul= mysqli_query($cnx, $comando);
     if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Produto cadastrado com sucesso!';
}
