<?php

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
        $descricao=$_POST['descricao'];
        $preco=$_POST['preco'];
        
        echo $nomeProduto."<br>";
        echo $descricao."<br>";
        echo $preco."<br>";
        
    }else{
        exibir("produtos/formulario");
    }
}