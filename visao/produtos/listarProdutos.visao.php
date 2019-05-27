<h2>Lista de todos os usuários</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Descrição</th>
        <th>Preço</th>
    </tr>
    <?php foreach($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idProduto'] ?></td>
        <td><?=$produto['nomeProduto'] ?></td>
        <td><?=$produto['descricaoProduto'] ?></td>
        <td><?=$produto['precoProduto'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="produto/adicionar">Adicionar Novo Produto</a>