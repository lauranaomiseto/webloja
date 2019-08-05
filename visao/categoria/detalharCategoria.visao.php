<h2>Dados da categoria <?=$categoria["nomeCategoria"]; ?></h2>

<table>
    <tr>
        <th>ID</th>
        <th>Categoria</th>
    </tr>
    <tr>
        <td><?=$categoria['idCategoria'] ?></td>
        <td><?=$categoria['nomeCategoria'] ?></td>
    </tr>
</table>
<br>
<a href="./categoria/listarCategorias"><button class="botao">Voltar</button></a>
