<?php
function addUsuario($nomeCompleto, $email, $senha){
    $comando="insert into usuario (nomeCompleto, email, senha) "
            . "values ('$nomeCompleto', '$email', '$senha');";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Cliente cadastrado com sucesso!';
}


function pegarTodosUsuarios(){
    $comando="select * from usuario";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    $usuarios = array();
    while ($usuario = mysqli_fetch_assoc($resul)){
        $usuarios[]=$usuario;
    }
    return $usuarios;
}


function pegarUsuarioId($id){
    $comando="select * from usuario where idUsuario=$id";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    $usuario= mysqli_fetch_assoc($resul);
    return $usuario;
}

function deletarUsuario($id){
    $comando="delete from usuario where idUsuario=$id";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Usuario deletado";
}


function editarUsuario($idUsuario, $nomeCompleto, $email, $senha){
    $comando="update cliente set nomeCompleto='$nomeCompleto', email='$email', senha='$senha' where idUsuario='$idUsuario'";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Dados atualizados com sucesso!';
}