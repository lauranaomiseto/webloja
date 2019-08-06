<h2>Dados do cliente <?=$cliente["nomeCompleto"]; ?></h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><?=$cliente['idCliente'] ?></td>
        <td><?=$cliente['nomeCompleto'] ?></td>
        <td><?=$cliente['email'] ?></td>
    </tr>
</table>
<br>
<a href="./endereco/adicionarEndereco/<?=$cliente["idCliente"]?>">Adicionar endereço</a><br><br>
<a href="./cliente/listarClientes"><button class="botao">Voltar</button></a>