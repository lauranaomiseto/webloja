<h2>Dados do produto <?=$produto["nomeProduto"]; ?></h2>

<table>
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Descrição</th>
        <th>Preço</th>
    </tr>
    <tr>
        <td><?=$produto['idProduto'] ?></td>
        <td><?=$produto['nomeProduto'] ?></td>
        <td><?=$produto['descricaoProduto'] ?></td>
        <td><?=$produto['precoProduto'] ?></td>
    </tr>
</table>