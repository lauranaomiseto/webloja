<h2>Dados da forma de pagamento: <?=$formaPagamento["descricao"]; ?></h2>

<table>
    <tr>
        <th>ID</th>
        <th>Forma de pagamento</th>
    </tr>
    <tr>
        <td><?=$formaPagamento['idFormaPagamento'] ?></td>
        <td><?=$formaPagamento['descricao'] ?></td>
    </tr>
</table>
<br>
<a href="./formaPagamento/listarFormasPagamento"><button class="botao">Voltar</button></a>
