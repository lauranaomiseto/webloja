<h2>Lista de todas as formas de pagamento</h2>

<table>
    <tr>
        <th>Forma de pagamento</th>
    </tr>
    <?php foreach($formasPagamento as $formaPagamento): ?>
    <tr>
        <td><?=$formaPagamento['descricao'] ?></td>
        <td><a href="./formaPagamento/verFormaPagamentoId/<?=$formaPagamento["idFormaPagamento"]?>"><button class="botao">Detalhar</button></a></td>
        <td><a href="./formaPagamento/editarF/<?=$formaPagamento["idFormaPagamento"]?>"><button class="botao">Editar</button></a></td>
        <td><a href="./formaPagamento/deletarF/<?=$formaPagamento["idFormaPagamento"]?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="./formaPagamento/adicionarFormaPagamento">Adicionar Nova Forma de Pagamento</a>
