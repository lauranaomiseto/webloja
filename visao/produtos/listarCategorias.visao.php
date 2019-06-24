<h2>Lista de todas as categorias</h2>

<table>
    <tr>
        <th>Categoria</th>
    </tr>
    <?php foreach($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['nomeCategoria'] ?></td>
        <td><a href="./produto/verCategoriaId/<?=$categoria["idCategoria"]?>">Detalhar</a></td>
        <td><a href="./produto/deletarC/<?=$categoria["idCategoria"]?>">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="produto/adicionarCategoria">Adicionar Nova Categoria</a>
