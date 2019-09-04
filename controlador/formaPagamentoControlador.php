<?php

require_once "modelo/formaPagamentoModelo.php";

function adicionarFormaPagamento(){
    if (ehPost()){
        $descricao=$_POST['descricao'];
        $erros= array();
        
        if (strlen(trim($descricao))== 0){
                $erros[]="O campo DESCRIÇÃO é obrigatório.<br>";
            }
            
        if (count($erros)==0){
            $erros[]= addFormaPagamento($descricao);
            $dados= array();
            $dados["erros"]= $erros;
            exibir("formaPagamento/cadastroFormaPagamento", $dados);
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("formaPagamento/cadastroFormaPagamento", $dados);
        }
        
    }else{
        exibir("formaPagamento/cadastroFormaPagamento");
    }
}


function listarFormasPagamento(){
    $dados= array();
    $dados["formasPagamento"]= pegarTodasFormasPagamento();
    exibir("formaPagamento/listarFormasPagamento", $dados);
}


function verFormaPagamentoId($id){
    $dados= array();
    $dados["formaPagamento"]= pegarFormaPagamentoId($id);
    exibir("formaPagamento/detalharFormaPagamento", $dados);
}


function deletarF($id){
    $msg= deletarFormaPagamento($id);
    redirecionar("formaPagamento/listarFormasPagamento");
}


function editarF($id){
    if (ehPost()){
        $descricao=$_POST['descricao'];
        $erros= array();
        
        if (strlen(trim($descricao))== 0){
                $erros[]="O campo DESCRICAO é obrigatório.<br>";
            }
            
        if (count($erros)==0){
            editarFormaPagamento($id, $descricao);
            redirecionar("formaPagamento/listarFormasPagamento");
        }else{
            $dados= array();
            $dados["erros"]= $erros;
            exibir("formaPagamento/cadastroFormaPagamento", $dados);
        }
        
    }else{
        $dados["formaPagamento"]= pegarFormaPagamentoId($id);
        exibir("formaPagamento/cadastroFormaPagamento",  $dados);
    }
}

