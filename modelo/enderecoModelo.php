<?php
 function addEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idUsuario){
     $comando="insert into endereco (logradouro, numero, complemento, bairro, cidade, cep, idUsuario)"
             . "values ('$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep', '$idUsuario')";
     $cnx= conn();
     $resul= mysqli_query($cnx, $comando);
     if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Endereço cadastrado com sucesso!';
 }
 
 function pegarTodosEnderecosId($id){
    $comando="select * from endereco where idUsuario=$id";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    $enderecos = array();
    while ($endereco = mysqli_fetch_assoc($resul)){
        $enderecos[]=$endereco;
    }
    return $enderecos;
}


function pegarEnderecoId($id){
    $comando="select * from endereco where idEndereco=$id";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    $endereco= mysqli_fetch_assoc($resul);
    return $endereco;
}


function deletarEndereco($id){
    $comando="delete from endereco where idEndereco=$id";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    
    return "Endereco deletado";
}

function editarEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $idEndereco){
    $comando="update endereco set logradouro='$logradouro', numero=$numero, complemento='$complemento', bairro='$bairro', "
            . "cidade='$cidade', cep='$cep' where idEndereco='$idEndereco'";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Dados atualizados com sucesso!';
}