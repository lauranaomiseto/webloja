<?php

require_once "modelo/formaPagamentoModelo.php";

/** A */
function adicionarFormaPagamento() {
    if (ehPost()) {
        $descricao = $_POST['descricao'];
        $erros = array();

        if (strlen(trim($descricao)) == 0) {
            $erros['descricao'] = "*";
        }

        if (count($erros) == 0) {
            $erros['sucesso'] = addFormaPagamento($descricao);
            $dados = array();
            $dados["erros"] = $erros;
            exibir("formaPagamento/cadastroFormaPagamento", $dados);
        } else {
            $dados = array();
            $dados["erros"] = $erros;
            exibir("formaPagamento/cadastroFormaPagamento", $dados);
        }
    } else {
        exibir("formaPagamento/cadastroFormaPagamento");
    }
}

/** A */
function listarFormasPagamento() {
    $dados = array();
    $dados["formasPagamento"] = pegarTodasFormasPagamento();
    exibir("formaPagamento/listarFormasPagamento", $dados);
}

/** A */
function verFormaPagamentoId($id) {
    $dados = array();
    $dados["formaPagamento"] = pegarFormaPagamentoId($id);
    exibir("formaPagamento/detalharFormaPagamento", $dados);
}

/** A */
function deletarF($id) {
    $msg = deletarFormaPagamento($id);
    redirecionar("formaPagamento/listarFormasPagamento");
}

/** A */
function editarF($id) {
    if (ehPost()) {
        $descricao = $_POST['descricao'];
        $erros = array();

        if (strlen(trim($descricao)) == 0) {
            $erros['descricao'] = "*";
        }

        if (count($erros) == 0) {
            editarFormaPagamento($id, $descricao);
            redirecionar("formaPagamento/listarFormasPagamento");
        } else {
            $dados = array();
            $dados["erros"] = $erros;
            exibir("formaPagamento/cadastroFormaPagamento", $dados);
        }
    } else {
        $dados["formaPagamento"] = pegarFormaPagamentoId($id);
        exibir("formaPagamento/cadastroFormaPagamento", $dados);
    }
}
