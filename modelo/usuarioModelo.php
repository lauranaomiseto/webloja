<?php
function addUsuario($nomeCompleto, $cpf, $email, $senha){
    $comando="insert into usuario (nomeCompleto, cpf, email, senha, tipoUsuario) "
            . "values ('$nomeCompleto', '$cpf', '$email', '$senha', 'C');";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Usuario cadastrado com sucesso!';
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


function editarUsuario($idUsuario, $nomeCompleto, $cpf, $email, $senha){
    $comando="update usuario set nomeCompleto='$nomeCompleto', cpf='$cpf', email='$email', senha='$senha' where idUsuario='$idUsuario'";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return 'Dados atualizados com sucesso!';
}
