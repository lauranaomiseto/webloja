<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
require_once "servico/uploadServico.php";

/** A */
function adicionar() {
    if (ehPost()) {
        $nomeProduto = $_POST['nomeProduto'];
        $descricaoProduto = $_POST['descricaoProduto'];
        $precoProduto = $_POST['precoProduto'];
        $idCategoria = $_POST['categoriaProduto'];
        $quant_estoque = $_POST['quant_estoque'];
        $estoque_minimo = $_POST['estoque_minimo'];
        $estoque_maximo = $_POST['estoque_maximo'];
        $nome_temp = $_FILES['imagem']['tmp_name'];
        $nome_real = $_FILES['imagem']['name'];

        $imagem = uploadImagem($nome_temp, $nome_real);

        $erros = array();

        if (strlen(trim($nomeProduto)) == 0) {
            $erros['nome'] = "*";
        }
        if (strlen(trim($descricaoProduto)) == 0) {
            $erros['descricao'] = "*";
        }
        if (strlen(trim($precoProduto)) == 0) {
            $erros['preco'] = "*";
        }
        if ($idCategoria == "verificação") {
            $erros['categoria'] = "*";
        }
        if (strlen(trim($quant_estoque)) == 0) {
            $erros['qntEstoque'] = "*";
        }
        if (strlen(trim($estoque_minimo)) == 0) {
            $erros['estoqueMin'] = "*";
        }
        if (strlen(trim($estoque_maximo)) == 0) {
            $erros['estoqueMax'] = "*";
        }

        if (count($erros) == 0) {
            $erros['sucesso'] = addProduto($nomeProduto, $descricaoProduto, $precoProduto, $idCategoria, $imagem, $quant_estoque, $estoque_minimo, $estoque_maximo);
            $dados = array();
            $dados["erros"] = $erros;
            $dados["categorias"] = pegarTodasCategorias();
            exibir("produtos/cadastroProduto", $dados);
        } else {
            $dados = array();
            $dados["erros"] = $erros;
            exibir("produtos/cadastroProduto", $dados);
        }
    } else {
        $dados["categorias"] = pegarTodasCategorias();
        exibir("produtos/cadastroProduto", $dados);
    }
}

/** A */
function listarProdutos() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produtos/listarProdutos", $dados);
}

/** A */
function verProdutoId($id) {
    $dados = array();
    $dados["produto"] = pegarProdutoId($id);
    exibir("produtos/detalharProduto", $dados);
}

/** anon */
function verProdutoId2($id) {
    $dados = array();
    $dados["produto"] = pegarProdutoId($id);
    exibir("produtos/detalharProduto2", $dados);
}

/** A */
function deletarP($id) {
    $msg = deletarProduto($id);
    redirecionar("produto/listarProdutos");
}

/** A */
function editarP($id) {
    if (ehPost()) {
        $nomeProduto = $_POST['nomeProduto'];
        $descricaoProduto = $_POST['descricaoProduto'];
        $precoProduto = $_POST['precoProduto'];
        $idCategoria = $_POST['categoriaProduto'];
        $quant_estoque = $_POST['quant_estoque'];
        $estoque_minimo = $_POST['estoque_minimo'];
        $estoque_maximo = $_POST['estoque_maximo'];
        $nome_temp = $_FILES['imagem']['tmp_name'];
        $nome_real = $_FILES['imagem']['name'];

        $imagem = uploadImagem($nome_temp, $nome_real);

        $erros = array();

        if (strlen(trim($nomeProduto)) == 0) {
            $erros['nome'] = "*";
        }
        if (strlen(trim($descricaoProduto)) == 0) {
            $erros['descricao'] = "*";
        }
        if (strlen(trim($precoProduto)) == 0) {
            $erros['preco'] = "*";
        }
        if ($idCategoria == "verificação") {
            $erros['categoria'] = "*";
        }
        if (strlen(trim($quant_estoque)) == 0) {
            $erros['qntEstoque'] = "*";
        }

        if (count($erros) == 0) {
            editarProduto($id, $nomeProduto, $descricaoProduto, $precoProduto, $idCategoria, $imagem, $quant_estoque, $estoque_minimo, $estoque_maximo);
            $dados["categorias"] = pegarTodasCategorias();
            redirecionar("produto/listarProdutos");
        } else {
            $dados = array();
            $dados["erros"] = $erros;
            $dados["categorias"] = pegarTodasCategorias();
            exibir("produtos/cadastroProduto", $dados);
        }
    } else {
        $dados["produto"] = pegarProdutoId($id);
        $dados["categorias"] = pegarTodasCategorias();
        exibir("produtos/cadastroProduto", $dados);
    }
}

/** anon */
function pesquisaProduto() {
    $pesquisa = $_POST['pesquisa'];
    $dados['produtos'] = pegarProdutoPesquisa($pesquisa);
    exibir("produtos/resultadoPesquisaProduto", $dados);
}

/** A */
function listarProdutosCategoria() {
    $dados['categorias'] = pegarTodasCategorias();
    $dados['produtos'] = pegarTodosProdutos();
    
    exibir("produtos/listarProdutosCategoria", $dados);    
}























