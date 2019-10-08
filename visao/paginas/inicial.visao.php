
<h2>Produtos da loja</h2>

<form action="./produto/pesquisaProduto" method="POST">
    <input type="text" class="caixaEntraInfo" placeholder="Produto" name="pesquisa">
    <button class="botao" type="submit">Buscar</button>
</form>
<br><br>


<div id="colecoes">
    <?php foreach ($produtos as $produto): ?>

        <div>
            <a href="./produto/verProdutoId2/<?= $produto["idProduto"] ?>">
                <img src="<?= $produto['imagem'] ?>" alt="$produto['nomeProduto']">
                <h3><?= $produto['nomeProduto'] ?></h3>
                <h3><?php echo str_replace(".", ",", $produto['precoProduto']) ?></h3>
            </a>
            <br>
       </div>

    <?php endforeach; ?>
</div>

