<?php
require_once "modelo/enderecoModelo.php";
require_once "modelo/formaPagamento.php";

function finalizarPedido(){
    if(acessoUsuarioEstaLogado()){
        $idUsuario=acessoPegarIdDoUsuario();
        $dados['enderecos']=pegarTodosEnderecosId($idUsuario);
        $dados['formasPagamento']= pegarTodasFormasPagamento();
        
        exibir("finalizarPedido/finalizarPedido", $dados);
    }else{
        exibir("login");
    }
}


function a() {
    $listaDeProdutos= array();
    
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id=$_SESSION["carrinho"][$i];
        $produto = pegarProdutoId($id);
        $listaDeProdutos[]=$produto;
    }
    $dados["produtos"] = $listaDeProdutos;
    exibir("carrinho/carrinho", $dados);
}