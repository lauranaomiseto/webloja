<h2>Dados do produto "<?=$produto["nomeProduto"]; ?>"</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Categoria</th>
        <th>Descrição</th>
        <th>Preço</th>
    </tr>
    <tr>
        <td><?=$produto['idProduto'] ?></td>
        <td><?=$produto['nomeProduto'] ?></td>
        <td><?=$produto['idCategoria'] ?></td>
        <td><?=$produto['descricaoProduto'] ?></td>
        <td><?=$produto['precoProduto'] ?></td>
    </tr>
</table>
<br>
<h3>Imagem:</h3>
<img src="<?=$produto['imagem'] ?>" alt="<?=$produto['nomeProduto'] ?>">
<br><br>

<a href="./produto/listarProdutos"><button class="botao">Voltar</button></a>