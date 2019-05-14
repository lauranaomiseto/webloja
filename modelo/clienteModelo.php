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