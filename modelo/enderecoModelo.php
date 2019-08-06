<?php
 function addEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idCliente){
     $comando="insert into endereco (logradouro, numero, complemento, bairro, cidade, cep, idCliente)"
             . "values ('$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep', '$idCliente')";
     $cnx= conn();
     $resul= mysqli_query($cnx, $comando);
     if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Endereço cadastrado com sucesso!';
 }