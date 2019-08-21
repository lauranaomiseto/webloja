<h2>Lista de todos os cupons</h2>

<table>
    <tr>
        <th>Cupom</th>
    </tr>
    <?php foreach($cupons as $cupom): ?>
    <tr>
        <td><?=$cupom['nomeCupom'] ?></td>
        <td><a href="./cupom/verCupomId/<?=$cupom["idCupom"]?>"><button class="botao">Detalhar</button></a></td>
        <td><a href="./cupom/editarC/<?=$cupom["idCupom"]?>"><button class="botao">Editar</button></a></td>
        <td><a href="./cupom/deletarC/<?=$cupom["idCupom"]?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="cupom/adicionarCupom">Adicionar Novo Cupom</a>


