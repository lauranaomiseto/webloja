<?php

require_once "modelo/produtoModelo.php";

function comprar($idProduto) {    
    $_SESSION["carrinho"][] = $idProduto;
}

function exibirCarrinho() {
    $listaDeProduto= array();
    
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id=$_SESSION["carrinho"][$i];
        $produto = pegarProdutoId($id);
        $listaDeProdutos[]=$produto;
    }
    $dados["produtos"] = $listaDeProdutos;
    exibir("carrinho/carrinho", $dados);
}

