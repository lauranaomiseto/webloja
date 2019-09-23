<?php

require_once "modelo/produtoModelo.php";

/** anon */
function comprar($idProduto) {    
    $_SESSION["carrinho"][] = $idProduto;
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

/** anon */
function exibirCarrinho() {
    $listaDeProdutos= array();
    
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id=$_SESSION["carrinho"][$i];
        $produto = pegarProdutoId($id);
        $listaDeProdutos[]=$produto;
    }
    $dados["produtos"] = $listaDeProdutos;
    exibir("carrinho/carrinho", $dados);
}

/** anon */
function tirar($idProduto) {        
    for ($i=0;$i<=count($_SESSION["carrinho"]);$i++){
        if ($_SESSION["carrinho"][$i]==$idProduto){
            $indice=$i;
        }
    }
    unset($_SESSION["carrinho"][$indice]);
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

