<?php


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

function pegarTodasNewsLetters(){
    $comando="select * from newsletter";
    $cnx=conn();
    $resul = mysqli_query($cnx, $comando);
    $newsLetters = array();
    while ($newsLetter = mysqli_fetch_assoc($resul)){
        $newsLetters[]=$newsLetter;
    }
    return $newsLetters;
}

function deletarNewsLetter($email){
    $comando="delete from newsletter where email='$email';";
    $cnx=conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    
    return "Email deletado";
}



