<?php

require_once "modelo/produtoModelo.php";
require_once "servico/correiosServico.php";

/** anon */
function comprar($idProduto) {
    $produto = array();
    $produto["idProduto"] = $idProduto;
    $produto["quantidade"] = 1;
    $_SESSION["carrinho"][] = $produto;
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

/** anon */
function exibirCarrinho() {
    $listaDeProdutos = array();
    $quantidadePorProduto = array();

    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        $id = $_SESSION["carrinho"][$i]["idProduto"];
        $produto = pegarProdutoId($id);
        $produto["quantidade"] = $_SESSION["carrinho"][$i]["quantidade"];
        $listaDeProdutos[] = $produto;
    }
    $dados["produtos"] = $listaDeProdutos;

    if (ehPost()) { //calcular frete
        $cep_destino = $_POST['cep'];
        $tipo_do_frete = $_POST['tipoFrete'];
        $valor = 0;
        $peso = 1;
        $cep_origem = 18202000;

        $val = (calcular_frete($cep_origem, $cep_destino, $peso, $valor, $tipo_do_frete));
        
        $erros = array();
        if (strlen(trim($cep_destino))!=8) {
            $erros['cep'] = "*Informe um cep válido!";
        } 
        if ($tipo_do_frete==null){
            $erros['tipoFrete'] = "*Selecione um tipo de entrega!";
        }
        
        if (count($erros)==0){
            $dados['freteValor'] = $val->Valor;
            $dados['prazoEntrega'] = $val->PrazoEntrega;
        }
        
        $dados['erros'] = $erros;

    }

    exibir("carrinho/carrinho", $dados);
}

/** anon */
function tirar($idProduto) {
    for ($i = 0; $i <= count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["idProduto"] == $idProduto) {
            $indice = $i;
        }
    }
    unset($_SESSION["carrinho"][$indice]);

    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);

    redirecionar("./carrinhoCompra/exibirCarrinho");
}

/** anon */
function alterarQuantidade() {
    $quantidade = $_POST['quantidade'];
    $idProduto = $_POST['idProduto'];

    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        $id = $_SESSION["carrinho"][$i]["idProduto"];

        if ($id == $idProduto) {
            $_SESSION["carrinho"][$i]["quantidade"] = $quantidade;
        }
    }
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

