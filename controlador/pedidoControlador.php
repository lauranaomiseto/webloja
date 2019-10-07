<?php

require_once "modelo/enderecoModelo.php";
require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";
require_once "modelo/formaPagamentoModelo.php";

function finalizarPedido() {
    if (acessoUsuarioEstaLogado()) {
        
        if (ehPost()){
            $nomeCupom = $_POST['nomeCupom'];
            $cupom = aplicarDescontoCupom($nomeCupom);
            
            $erros= array();
            if($cupom == null){
                $erros[]="Cupom inválido";
            }else{
                $erros[]="Cupom aplicado!";
                $dados['cupom']=$cupom;
            }
            $dados['erros']= $erros;
        }        
        
        $idUsuario = acessoPegarIdDoUsuario();
        $dados['enderecos'] = pegarTodosEnderecosId($idUsuario);
        $dados['formasPagamento'] = pegarTodasFormasPagamento();

        $listaDeProdutos = array();
        for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
            $id = $_SESSION["carrinho"][$i];
            $produto = pegarProdutoId($id);
            $listaDeProdutos[] = $produto;
        }

        $subtotal = 0;
        $contProdutos = 0;
        foreach ($listaDeProdutos as $produto):
            $subtotal += $produto['precoProduto'];
            $contProdutos += 1;
        endforeach;
        $dados['contProdutos'] = $contProdutos;
        $dados['subtotal'] = $subtotal;

        exibir("finalizarPedido/finalizarPedido", $dados);
    } else {
        exibir("login");
    }
}

function addPedido(){
    
}
