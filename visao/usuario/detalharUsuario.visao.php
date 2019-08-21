<h2>Dados do usuário <?=$usuario["nomeCompleto"]; ?></h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><?=$cliente['idUsuario'] ?></td>
        <td><?=$cliente['nomeCompleto'] ?></td>
        <td><?=$cliente['email'] ?></td>
    </tr>
</table>
<br>

<h2>Endereços cadastrados:</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>CEP</th>
    </tr>
    <?php foreach($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['idEndereco'] ?></td>
        <td><?=$endereco['logradouro'] ?></td>
        <td><?=$endereco['numero'] ?></td>
        <td><?=$endereco['complemento'] ?></td>
        <td><?=$endereco['bairro'] ?></td>
        <td><?=$endereco['cidade'] ?></td>
        <td><?=$endereco['cep'] ?></td>
        <td><a href="./endereco/editarE/<?=$endereco["idEndereco"] ?>"><button class="botao">Editar</button></a></td>
        <td><a href="./endereco/deletarE/<?=$endereco['idEndereco'] ?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br>

<a href="./endereco/adicionarEndereco/<?=$cliente["idCliente"]?>">Adicionar endereço</a><br><br>
<a href="./usuario/listarUsuarios"><button class="botao">Voltar</button></a>