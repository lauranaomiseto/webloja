<h2>Dados do produto "<?=$produto["nomeProduto"]; ?>"</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>ID Categoria</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Quantidade em estoque</th>
        <th>Estoque mínimo</th>
        <th>Estoque máximo</th>
    </tr>
    <tr>
        <td><?=$produto['idProduto'] ?></td>
        <td><?=$produto['nomeProduto'] ?></td>
        <td><?=$produto['idCategoria'] ?></td>
        <td><?=$produto['descricaoProduto'] ?></td>
        <td><?=$produto['precoProduto'] ?></td>
        <td><?=$produto['quant_estoque'] ?></td>
        <td><?=$produto['estoque_minimo'] ?></td>
        <td><?=$produto['estoque_maximo'] ?></td>
    </tr>
</table>
<br>
<h3>Imagem:</h3>
<img src="<?=$produto['imagem'] ?>" alt="<?=$produto['nomeProduto'] ?>">
<br><br>

<a href="./produto/listarProdutos"><button class="botao">Voltar</button></a>