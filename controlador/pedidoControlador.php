<?php

require_once "modelo/enderecoModelo.php";
require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";
require_once "modelo/formaPagamentoModelo.php";
require_once "modelo/pedidoModelo.php";
require_once "servico/correiosServico.php";

/** A, C */
function finalizarPedido() {
    if (ehPost()) { //calcular desconto cupom
        $nomeCupom = $_POST['nomeCupom'];
        $cupom = aplicarDescontoCupom($nomeCupom);

        $erros = array();
        if ($cupom == null) {
            $erros['cupom'] = "*Cupom inválido";
        } else {
            $erros['cupom'] = "*Cupom aplicado!";
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
}

/** C, A */
function salvarPedido() {
    if (ehPost()) {
        $idUsuario = acessoPegarIdDoUsuario();
        $idEndereco = $_POST['enderecoEntrega'];
        $idFormaPagamento = $_POST['formaPagamento'];

        $erros = array();
        if ($idEndereco == "verificação") {
            $erros['endereco'] = "*Selecione um endereço de entrega.<br>";
        }
        if ($idFormaPagamento == "verificação") {
            $erros['formaPagamento'] = "*Selecione uma forma de pagamento.<br>";
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

/** C, A */
function listarPedidosIdUsuario() {
    $idUsuario = acessoPegarIdDoUsuario();
    $dados = array();
    $dados["pedidos"] = pegarPedidoIdUsuario($idUsuario);
    exibir("pedido/listarPedidos", $dados);
}

/** C, A */
function verPedidoId($id) {
    $dados = array();
    $dados["produtos"] = pegarPedidoId($id);
    exibir("pedido/detalharPedido", $dados);
}

/** C, A */
function deletarP($id) {
    $msg = deletarPedido($id);
    redirecionar("pedido/listarPedidosIdUsuario");
}

/** A */
function listarPedidosTempo() {
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];
        
        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros['data1'] = "*";
        }
        if ($data2 == null) {
            $erros['data2'] = "*";
        }
        if ($data1>$data2) {
            $erros['datasInvalidas'] = "*Selecione um intervalo de tempo válido.";
        }

        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosTempo($data1, $data2);
            $dados['data1'] = $data1;
            $dados['data2'] = $data2;
            exibir("pedido/listarPedidosTempo", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioPedidosTempo", $dados);
        }
    }else {
        exibir("pedido/formularioPedidosTempo");
    }
}

function listarPedidosLocalizacao(){
    if (ehPost()) {
        $cidade = $_POST['cidade'];
        
        $dados = array();
        $erros = array();
        if ($cidade == null) {
            $erros['cidade'] = "*";
        }

        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosLocalizacao($cidade);
            $dados['cidade'] = $cidade;
            exibir("pedido/listarPedidosLocalizacao", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioPedidosLocalizacao", $dados);
        }
    }else {
        exibir("pedido/formularioPedidosLocalizacao");
    }
}

function calcularFaturamentoPeriodo(){
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];
        
        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros['data1'] = "*";
        }
        if ($data2 == null) {
            $erros['data2'] = "*";
        }
        if ($data1>$data2) {
            $erros['datasInvalidas'] = "*Selecione um intervalo de tempo válido.";
        }

        if (count($erros) == 0) {
            $dados['pedidos'] = pegarFaturamentoPeriodo($data1, $data2);
            $dados['data1'] = $data1;
            $dados['data2'] = $data2;
            exibir("pedido/faturamentoTempo", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioFaturamentoTempo", $dados);
        }
    }else {
        exibir("pedido/formularioFaturamentoTempo");
    }
}

