<h2>Lista de todas as categorias</h2>

<table>
    <tr>
        <th>Categoria</th>
    </tr>
    <?php foreach($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['nomeCategoria'] ?></td>
        <td><a href="./categoria/verCategoriaId/<?=$categoria["idCategoria"]?>"><button class="botao">Detalhar</button></a></td>
        <td><a href="./categoria/editarC/<?=$categoria["idCategoria"]?>"><button class="botao">Editar</button></a></td>
        <td><a href="./categoria/deletarC/<?=$categoria["idCategoria"]?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="categoria/adicionarCategoria">Adicionar Nova Categoria</a>
