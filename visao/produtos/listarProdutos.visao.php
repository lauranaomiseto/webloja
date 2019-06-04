<h2>Lista de todos os usuários</h2>

<table>
    <tr>
        <th>Produto</th>
        <th>Preço</th>
    </tr>
    <?php foreach($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeProduto'] ?></td>
        <td><?=$produto['precoProduto'] ?></td>
        <td><a href="./produto/verProdutoId/<?=$produto["idProduto"] ?>">Detalhar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="produto/adicionar">Adicionar Novo Produto</a>