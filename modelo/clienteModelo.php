<?php
function addCliente($nomeCompleto, $email, $senha){
    $comando="insert into (nomeCompleto, email, senha) "
            . "values ('$nomeCompleto', '$email', '$senha')";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    if(!$resul){
        die('Erro ao cadastrar cliente'. mysqli_error($cnx));
    }
    return 'Cliente cadastrado com sucesso!';
}