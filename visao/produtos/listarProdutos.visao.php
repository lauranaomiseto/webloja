<h2>Lista de todos os produtos</h2>

<table>
    <tr>
        <th>Produto</th>
        <th>Preço</th>
    </tr>
    <?php foreach($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeProduto'] ?></td>
        <td><?=$produto['precoProduto'] ?></td>
        <td><a href="./produto/verProdutoId/<?=$produto["idProduto"]?>"><button class="botao">Detalhar</button></a></td>
        <td><a href="./produto/editarP/<?=$produto["idProduto"] ?>"><button class="botao">Editar</button></a></td>
        <td><a href="./produto/deletarP/<?=$produto["idProduto"] ?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="produto/adicionar">Adicionar Novo Produto</a>