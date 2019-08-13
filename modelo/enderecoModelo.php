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
 
 function pegarTodosEnderecosId($id){
    $comando="select * from endereco where idCliente=$id";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    $enderecos = array();
    while ($endereco = mysqli_fetch_assoc($resul)){
        $enderecos[]=$endereco;
    }
    return $enderecos;
}