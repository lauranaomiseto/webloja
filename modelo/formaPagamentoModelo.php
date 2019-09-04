<?php

function addFormaPagamento($descricao){
    $comando= "insert into formaPagamento (descricao) "
            . "values ('$descricao');";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Forma de pagamento cadastrado com sucesso!";
}

function pegarTodasFormasPagamento(){
    $comando= "select * from formaPagamento";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $formasPagamento = array();
    while ($formaPagamento = mysqli_fetch_assoc($resul)){
        $formasPagamento[]=$formaPagamento; 
    }
    return $formasPagamento;
}

function pegarFormaPagamentoId($id){
    $comando="select * from formaPagamento where idFormaPagamento= $id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $formaPagamento= mysqli_fetch_assoc($resul);
    return $formaPagamento;
}


function deletarFormaPagamento($id){
    $comando= "delete from formaPagamento where idFormaPagamento=$id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Forma de pagamento deletada";
}

function editarFormaPagamento($id, $descricao){
    $comando="update formaPagamento set descricao='$descricao' where idFormaPagamento='$id';";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Dados atualizados com sucesso!";
}


