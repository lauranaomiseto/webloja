<h2>Dados do cupom <?=$cupom["nomeCupom"]; ?></h2>

<table>
    <tr>
        <th>ID</th>
        <th>Cupom</th>
        <th>Desconto</th>
    </tr>
    <tr>
        <td><?=$cupom['idCupom'] ?></td>
        <td><?=$cupom['nomeCupom'] ?></td>
        <td><?=$cupom['desconto'] ?></td>
    </tr>
</table>
<br>
<a href="./cupom/listarCupons"><button class="botao">Voltar</button></a>
