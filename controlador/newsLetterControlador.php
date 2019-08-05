<?php

require_once "modelo/newsLetterModelo.php";

function newsLetter(){
    if (ehPost()){
        $email=$_POST['emailNewsLetter'];
        $erros= array();
        
        if(strlen(trim($email))==0){
            $erros[]="Email inválido";
        }
        if (count($erros)==0){
            $erros[] = newsLetterModelo($email);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("newsLetter/formularioNewsLetter", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("newsLetter/formularioNewsLetter", $dados);
        }
    }else{
        exibir("newsLetter/formularioNewsLetter");
    }
}

function listarNewsLetters(){
    $dados = array();
    $dados["newsLetters"]= pegarTodasNewsLetters();
    exibir("newsLetter/listarNewsLetters", $dados);
}

function deletarN($email){
    $msg= deletarNewsLetter($email);
    redirecionar("newsLetter/listarNewsLetters");
}
