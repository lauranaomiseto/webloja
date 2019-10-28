<h2>Endereços cadastrados:</h2>
<table>
    <tr>
        <th>Nome Endereço</th>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Bairro</th>
        <th>Cidade</th>
    </tr>
    <?php foreach($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['nomeEndereco'] ?></td>
        <td><?=$endereco['logradouro'] ?></td>
        <td><?=$endereco['numero'] ?></td>
        <td><?=$endereco['bairro'] ?></td>
        <td><?=$endereco['cidade'] ?></td>
        <td><a href="./endereco/editarE/<?=$endereco["idEndereco"] ?>/<?=$idUsuario?>"><button class="botao">Editar</button></a></td>
        <td><a href="./endereco/deletarE/<?=$endereco['idEndereco'] ?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br>

<a href="./endereco/adicionarEndereco/<?=$idUsuario?>"><button class="botao1">Novo endereço</button></a><br><br>
<a href="./usuario/minhaConta"><button class="botao">Voltar</button></a>