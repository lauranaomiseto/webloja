<h2>Lista de todos os usuários</h2>

<table>
    <tr>
        <th>Nome</th>
    </tr>
    <?php foreach($clientes as $cliente): ?>
    <tr>
        <td><?=$cliente['nomeCompleto'] ?></td>
        <td><a href="./cliente/verClienteId/<?=$cliente["idCliente"] ?>">Detalhar</a></td>
        <td><a href="./cliente/editarC/<?=$cliente["idCliente"] ?>">Editar</a></td>
        <td><a href="./cliente/deletarC/<?=$cliente["idCliente"] ?>">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="cliente/cadastro">Adicionar Novo Usuário</a>