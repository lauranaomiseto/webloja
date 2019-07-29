<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>

<br>
    <form action="" method="POST">
        <input type="text" placeholder="Produto" class="caixaEntraInfo" name="nomeProduto" value="<?=@$produto['nomeProduto']?>"><br><br>
        <input type="text" placeholder="Descrição" class="caixaEntraInfo" name="descricaoProduto" value="<?=@$produto['descricaoProduto']?>"><br><br>
        <input type="text" placeholder="Preço" class="caixaEntraInfo" name="precoProduto" value="<?=@$produto['precoProduto']?>"><br><br>
        <button class="botao">Cadastrar</button>
    </form>
<a href="./produto/listarProdutos">Voltar</a>