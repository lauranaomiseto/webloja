<h2>Lista de todos os emails cadastrados na News Letters</h2>

<table>
    <tr>
        <th>Email</th>
    </tr>
    <?php foreach($newsLetters as $newsLetter): ?>
    <tr>
        <td><?=$newsLetter["email"] ?></td>
        <td><a href="./cliente/deletarN/<?=$newsLetter["email"]?>"><button class="botao">Deletar</button></a></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="cliente/newsLetter">Receba novidades sem compromisso!</a>