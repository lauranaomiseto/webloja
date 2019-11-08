<?php
if (ehPost()) {
    foreach ($erros as $erro) {
        echo "<br>*$erro";
    }
}
?>

<br><br>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Produto" class="caixaEntraInfo" name="nomeProduto" value="<?= @$produto['nomeProduto'] ?>"><br><br>
    <select class="caixaEntraInfo" name="categoriaProduto">
        <option value="verificação">Categoria</option>
        <?php foreach ($categorias as $categoria): ?>
            <option value="<?= @$categoria['idCategoria'] ?>"><?= $categoria['nomeCategoria'] ?></option>
        <?php endforeach; ?>            
    </select><br><br>
    <input type="text" placeholder="Descrição" class="caixaEntraInfo" name="descricaoProduto" value="<?= @$produto['descricaoProduto'] ?>"><br><br>
    <input type="text" placeholder="Preço" class="caixaEntraInfo" name="precoProduto" value="<?= @$produto['precoProduto'] ?>"><br><br>
    <input type="file" placeholder="Imagem" name="imagem" value="<?= @$produto['imagem'] ?>"><br><br>
    <input type="text" placeholder="Quantidade em estoque" class="caixaEntraInfo" name="quant_estoque" value="<?= @$produto['quant_estoque'] ?>"><br><br>
    <input type="text" placeholder="Estoque máximo" class="caixaEntraInfo" name="estoque_maximo" value="<?= @$produto['estoque_maximo'] ?>"><br><br>
    <input type="text" placeholder="Estoque mínimo" class="caixaEntraInfo" name="estoque_minimo" value="<?= @$produto['estoque_minimo'] ?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./produto/listarProdutos"><button class="botao">Voltar</button></a>



