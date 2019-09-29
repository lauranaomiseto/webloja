<?php

require_once "modelo/cupomModelo.php";


/** A */
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

/** A */
function listarCupons(){
    $dados= array();
    $dados["cupons"]= pegarTodosCupons();
    exibir("cupom/listarCupons", $dados);
}

/** A */
function verCupomId($id){
    $dados= array();
    $dados["cupom"]= pegarCupomId($id);
    exibir("cupom/detalharCupom", $dados);
}

/** A */
function deletarC($id){
    $msg= deletarCupom($id);
    redirecionar("cupom/listarCupons");
}

/** A */
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

