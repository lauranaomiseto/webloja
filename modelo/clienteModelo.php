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


function newsLetterModelo($email){
    $comando="insert into newsletter (email)"
            . "values ('$email')";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Você receberá novidades da loja!';
}

function pegarTodosClientes(){
    $comando="select * from cliente";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    while ($cliente = mysqli_fetch_assoc($resul)){
        $clientes[]=$cliente;
    }
    return $clientes;
}


function pegarTodasNewsLetters(){
    $comando="select * from newsLetter";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    while ($newsLetter = mysqli_fetch_assoc($resul)){
        $newsLetters[]=$newsLetter;
    }
    return $newsLetters;
}


function pegarClienteId($id){
    $comando="select * from cliente where idCliente=$id";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    $cliente= mysqli_fetch_assoc($resul);
    return $cliente;
}