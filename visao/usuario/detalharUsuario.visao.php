<h2>Dados do usuário <?=$usuario["nomeCompleto"]; ?></h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><?=$usuario['idUsuario'] ?></td>
        <td><?=$usuario['nomeCompleto'] ?></td>
        <td><?=$usuario['cpf'] ?></td>
        <td><?=$usuario['email'] ?></td>
    </tr>
</table>
<br>

<h2>Endereços cadastrados:</h2>
<table>
    <tr>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Bairro</th>
        <th>Cidade</th>
    </tr>
    <?php foreach($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['logradouro'] ?></td>
        <td><?=$endereco['numero'] ?></td>
        <td><?=$endereco['bairro'] ?></td>
        <td><?=$endereco['cidade'] ?></td>
        <td><a href="./endereco/verEnderecoId/<?=$endereco['idEndereco'] ?>/<?=$usuario["idUsuario"]?>"><button class="botao">Detalhar</button></a></td>
        <td><a href="./endereco/editarE/<?=$endereco["idEndereco"] ?>/<?=$usuario["idUsuario"]?>"><button class="botao">Editar</button></a></td>
        <td><a href="./endereco/deletarE/<?=$endereco['idEndereco'] ?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br>

<a href="./endereco/adicionarEndereco/<?=$usuario["idUsuario"]?>">Adicionar endereço</a><br><br>
<a href="./usuario/listarUsuarios"><button class="botao">Voltar</button></a>