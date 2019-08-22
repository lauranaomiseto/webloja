
<div id="produto">
    <div id="foto">
        <img src="<?=$produto['imagem']?>" alt='nao tem'>
    </div>
    <div id="infoProduto">
        <h2><?=$produto['nomeProduto']; ?></h2>
        <p>
            <?=$produto['descricaoProduto'] ?>
        </p>
        <h2><?=$produto['precoProduto'] ?></h2>
        <a href="./carrinhoCompra/comprar/<?=$produto['idProduto']?>"><button>Comprar</button></a>
    </div>     	
</div>	

<a href="./"><button class="botao">Voltar</button></a>