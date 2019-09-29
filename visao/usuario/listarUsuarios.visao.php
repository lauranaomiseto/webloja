<h2>Lista de todos os usuários</h2>

<table>
    <tr>
        <th>Nome</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['nomeCompleto'] ?></td>
        <td><a href="./usuario/verUsuarioId/<?=$usuario["idUsuario"] ?>"><button class="botao">Detalhar</button></a></td>
        <td><a href="./usuario/editarU/<?=$usuario["idUsuario"] ?>"><button class="botao">Editar</button></a></td>
        <td><a href="./usuario/deletarU/<?=$usuario["idUsuario"] ?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="usuario/cadastroUsuario"><button class="botao1">Novo Usuário</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao1">Voltar</button></a><br><br>

