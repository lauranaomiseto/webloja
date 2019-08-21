<?php

require_once "modelo/cupomModelo.php";

function adicionarCupom(){
    if (ehPost()){
        $nomeCupom=$_POST['nomeCupom'];
        $desconto=$_POST['desconto'];
        $erros= array();
        
        if (strlen(trim($nomeCupom))== 0){
                $erros[]="O campo CUPOM é obrigatório.<br>";
            }
        if ($desconto== 0){
                $erros[]="O campo DESCONTO é obrigatório.<br>";
            }
            
        if (count($erros)==0){
            $erros[]= addCupom($nomeCupom, $desconto);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("cupom/cadastroCupom", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("cupom/cadastroCupom", $dados);
        }
        
    }else{
        exibir("cupom/cadastroCupom");
    }
}


function listarCupons(){
    $dados= array();
    $dados["cupons"]= pegarTodosCupons();
    exibir("cupom/listarCupons", $dados);
}


function verCupomId($id){
    $dados= array();
    $dados["cupom"]= pegarCupomId($id);
    exibir("cupom/detalharCupom", $dados);
}


function deletarC($id){
    $msg= deletarCupom($id);
    redirecionar("cupom/listarCupons");
}


function editarC($id){
    if (ehPost()){
        $nomeCupom=$_POST['nomeCupom'];
        $desconto=$_POST['desconto'];
        $erros= array();
        
        if (strlen(trim($nomeCupom))== 0){
                $erros[]="O campo CUPOM é obrigatório.<br>";
            }
        if ($desconto== 0){
                $erros[]="O campo DESCONTO é obrigatório.<br>";
            }
            
        if (count($erros)==0){
            editarCupom($id, $nomeCupom, $desconto);
            redirecionar("cupom/listarCupons");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("cupom/cadastroCupom", $dados);
        }
        
    }else{
        $dados["cupom"]= pegarCupomId($id);
        exibir("cupom/cadastroCupom",  $dados);
    }
}

