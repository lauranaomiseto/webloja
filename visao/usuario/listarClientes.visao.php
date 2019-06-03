<h2>Lista de todos os usuários</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <?php foreach($clientes as $cliente): ?>
    <tr>
        <td><?=$cliente['idCliente'] ?></td>
        <td><?=$cliente['nomeCompleto'] ?></td>
        <td><?=$cliente['email'] ?></td>
        <td><a href="./cliente/verClienteId/<?=$cliente["idCliente"] ?>">Detalhar</a></td>
    </tr>
    <?php endforeach; ?>
</table>