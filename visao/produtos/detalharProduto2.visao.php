
<div id="produto">
    <div id="foto">
        <img src="imagens/produtos/colecao1b.jpg" alt='nao tem'>
    </div>
    <div id="infoProduto">
        <h2><?=$produto["nomeProduto"]; ?></h2>
        <p>
            <?=$produto['descricaoProduto'] ?>
        </p>
        <h2><?=$produto['precoProduto'] ?></h2>
        <button><a href="./carrinho/addNoCarrinho/<?=$produto['idProduto']?>">Comprar</a></button>
    </div>     	
</div>	

<a href="./"><button class="botao">Voltar</button></a>