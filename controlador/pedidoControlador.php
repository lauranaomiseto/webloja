<?php

require_once "modelo/enderecoModelo.php";
require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";
require_once "modelo/formaPagamentoModelo.php";
require_once "modelo/pedidoModelo.php";

function finalizarPedido() {
    if (acessoUsuarioEstaLogado()) {

        if (ehPost()) {
            $nomeCupom = $_POST['nomeCupom'];
            $cupom = aplicarDescontoCupom($nomeCupom);

            $erros = array();
            if ($cupom == null) {
                $erros[] = "Cupom inválido";
            } else {
                $erros[] = "Cupom aplicado!";
                $dados['cupom'] = $cupom;
            }
            $dados['erros'] = $erros;
        }

        $idUsuario = acessoPegarIdDoUsuario();
        $dados['enderecos'] = pegarTodosEnderecosId($idUsuario);
        $dados['formasPagamento'] = pegarTodasFormasPagamento();

        $listaDeProdutos = array();
        for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
            $id = $_SESSION["carrinho"][$i]["idProduto"];
            $quantidade = $_SESSION["carrinho"][$i]["quantidade"];
            $produto = pegarProdutoId($id);
            $produto["quantidade"] = $quantidade;
            $listaDeProdutos[] = $produto;
        }

        $subtotal = 0;
        $contProdutos = 0;
        foreach ($listaDeProdutos as $produto):
            $subtotal = $produto['precoProduto'] * $produto["quantidade"] + $subtotal;
            $contProdutos += $produto["quantidade"];
        endforeach;
        $dados['contProdutos'] = $contProdutos;
        $dados['subtotal'] = $subtotal;

        exibir("pedido/finalizarPedido", $dados);
    } else {
        exibir("login");
    }
}

function salvarPedido() {
    if (ehPost()) {
        $idUsuario = acessoPegarIdDoUsuario();
        $idEndereco = $_POST['enderecoEntrega'];
        $idFormaPagamento = $_POST['formaPagamento'];

        $erros = array();
        if ($idEndereco == "verificação") {
            $erros[] = "Selecione um ENDEREÇO de entrega.<br>";
        }
        if ($idFormaPagamento == "verificação") {
            $erros[] = "Selecione uma FORMA DE PAGAMENTO.<br>";
        }

        if (count($erros) == 0) {
            $erros[] = addPedido($idUsuario, $idEndereco, $idFormaPagamento);
            exibir("pedido/sucesso");
            
        } else {
            $dados = array();
            $dados["erros"] = $erros;

            $idUsuario = acessoPegarIdDoUsuario();
            $dados['enderecos'] = pegarTodosEnderecosId($idUsuario);
            $dados['formasPagamento'] = pegarTodasFormasPagamento();

            $listaDeProdutos = array();
            for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
                $id = $_SESSION["carrinho"][$i]["idProduto"];
                $quantidade = $_SESSION["carrinho"][$i]["quantidade"];
                $produto = pegarProdutoId($id);
                $produto["quantidade"] = $quantidade;
                $listaDeProdutos[] = $produto;
            }

            $subtotal = 0;
            $contProdutos = 0;
            foreach ($listaDeProdutos as $produto):
                $subtotal = $produto['precoProduto'] * $produto["quantidade"] + $subtotal;
                $contProdutos += $produto["quantidade"];
            endforeach;
            $dados['contProdutos'] = $contProdutos;
            $dados['subtotal'] = $subtotal;

            exibir("pedido/finalizarPedido", $dados);
        }
    }else {
        redirecionar("pedido/finalizarPedido");
    }
}
