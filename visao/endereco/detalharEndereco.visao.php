<h2>Dados do Endereço</h2>
<table>
    <tr>
        <th>Nome endereço</th>
        <th>ID</th>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>CEP</th>     
            
    </tr>
    <tr>
        <td><?=$endereco['nomeEndereco'] ?></td>
        <td><?=$endereco['idEndereco']?></td>
        <td><?=$endereco['logradouro'] ?></td>
        <td><?=$endereco['numero'] ?></td>
        <td><?=$endereco['complemento']?></td>
        <td><?=$endereco['bairro'] ?></td>
        <td><?=$endereco['cidade'] ?></td>
        <td><?=$endereco['cep'] ?></td>
        
    </tr>
</table>
<br>
<a href="./usuario/verUsuarioId/<?=$idUsuario?>"><button class="botao">Voltar</button></a>