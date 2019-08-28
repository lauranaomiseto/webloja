<h2>Produtos da loja</h2>

<div id="colecoes">
    <?php foreach($produtos as $produto): ?>
    
        <div><a href="./produto/verProdutoId2/<?=$produto["idProduto"]?>">
                <img src="<?=$produto['imagem'] ?>" alt="nao tem">
            <h3><?=$produto['nomeProduto'] ?></h3>
            <h3><?php echo str_replace(".", ",", $produto['precoProduto'])?></h3>
        </a></div>
    
    <?php endforeach; ?>
</div>

