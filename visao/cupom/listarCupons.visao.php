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
<a href="cupom/adicionarCupom"><button class="botao1">Novo Cupom</button></a><br><br>
<a href="usuario/dashAdm"><button class="botao1">Voltar</button></a><br><br>


