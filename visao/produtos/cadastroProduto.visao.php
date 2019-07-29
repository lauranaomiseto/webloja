<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "*$erro<br>";
        }
    }
?>

<br>
    <form action="" method="POST">
        Nome: <input type="text" name="nomeProduto" value="<?=@$produto['nomeProduto']?>"><br><br>
        Descrição: <input type="text" name="descricaoProduto" value="<?=@$produto['descricaoProduto']?>"><br><br>
        Preço: <input type="text" name="precoProduto" value="<?=@$produto['precoProduto']?>"><br><br>
        <input type="submit">
    </form>
<a href="./produto/listarProdutos">Voltar</a>