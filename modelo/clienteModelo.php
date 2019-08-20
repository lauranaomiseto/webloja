<?php
function addCliente($nomeCompleto, $email, $senha){
    $comando="insert into cliente (nomeCompleto, email, senha) "
            . "values ('$nomeCompleto', '$email', '$senha');";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Cliente cadastrado com sucesso!';
}


function pegarTodosClientes(){
    $comando="select * from cliente";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    $clientes = array();
    while ($cliente = mysqli_fetch_assoc($resul)){
        $clientes[]=$cliente;
    }
    return $clientes;
}


function pegarClienteId($id){
    $comando="select * from cliente where idCliente=$id";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    $cliente= mysqli_fetch_assoc($resul);
    return $cliente;
}

function deletarCliente($id){
    $comando="delete from cliente where idCliente=$id";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Cliente deletado";
}


function editarCliente($idCliente, $nomeCompleto, $email, $senha){
    $comando="update cliente set nomeCompleto='$nomeCompleto', email='$email', senha='$senha' where idCliente='$idCliente'";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Dados atualizados com sucesso!';
}