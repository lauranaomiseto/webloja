<?php

require_once "modelo/produtoModelo.php";

/** anon */
function comprar($idProduto) {   
    $produto= array();
    $produto["idProduto"]= $idProduto;
    $produto["quantidade"]= 1;
    $_SESSION["carrinho"][] = $produto;
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

/** anon */
function exibirCarrinho() {
    $listaDeProdutos= array();
    $quantidadePorProduto= array();
    
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id=$_SESSION["carrinho"][$i]["idProduto"];
        $produto = pegarProdutoId($id);
        $produto["quantidade"] = $_SESSION["carrinho"][$i]["quantidade"];
        $listaDeProdutos[]=$produto;
    }
    $dados["produtos"] = $listaDeProdutos;
    exibir("carrinho/carrinho", $dados);
}

/** anon */
function tirar($idProduto) {        
    for ($i=0;$i<=count($_SESSION["carrinho"]);$i++){
        if ($_SESSION["carrinho"][$i]["idProduto"]==$idProduto){
            $indice=$i;
        }
    }
    unset($_SESSION["carrinho"][$indice]);
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

/** anon */
function alterarQuantidade(){
    $quantidade=$_POST['quantidade'];
    $idProduto=$_POST['idProduto'];
    
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id=$_SESSION["carrinho"][$i]["idProduto"];
   
        if ($id == $idProduto){
            $_SESSION["carrinho"][$i]["quantidade"]=$quantidade;
        }
        
    }
    redirecionar("./carrinhoCompra/exibirCarrinho");
}
