<?php

require_once "modelo/produtoModelo.php";

function visualizar(){
    $passarDados= array();
    $passarDados['nome']= "Kahuna";
    $passarDados['descricao']= "Hambúrguer de 200g de fraldinha, pão preto (australiano), mix de cogumelos, queijo cheddar e maionese de ervas.";
    $passarDados['preco']= "20,00";
    
    exibir("produtos/visualizar", $passarDados);
}


function adicionar(){
    if (ehPost()){
        $nomeProduto=$_POST['nomeProduto'];
        $descricaoProduto=$_POST['descricaoProduto'];
        $precoProduto=$_POST['precoProduto'];
        
        $mensagem = addProduto($nomeProduto, $descricaoProduto, $precoProduto);
        
        echo $mensagem;
        
    }else{
        exibir("produtos/cadastroProduto");
    }
}