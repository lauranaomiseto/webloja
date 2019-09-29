<?php

function addCupom($nomeCupom, $desconto){
    $comando= "insert into cupom (nomeCupom, desconto) "
            . "values ('$nomeCupom', '$desconto');";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Cupom cadastrado com sucesso!";
}

function pegarTodosCupons(){
    $comando= "select * from cupom order by nomeCupom";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $cupons = array();
    while ($cupom = mysqli_fetch_assoc($resul)){
        $cupons[]=$cupom; 
    }
    return $cupons;
}

function pegarCupomId($id){
    $comando="select * from cupom where idCupom= $id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $cupom= mysqli_fetch_assoc($resul);
    return $cupom;
}


function deletarCupom($id){
    $comando= "delete from cupom where idCupom=$id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Cupom deletada";
}

function editarCupom($id, $nomeCupom, $desconto){
    $comando="update cupom set nomeCupom='$nomeCupom', desconto='$desconto' where idCupom='$id';";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Dados atualizados com sucesso!";
}


