<table>
    <tr>
        <td>Email</td>
    </tr>
    <?php foreach($newsLetters as $newLetter): ?>
    <tr>
        <th><?=$newsLetters["newsLetter"] ?></th>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="cliente/cadastro">Receba novidades sem compromisso!</a>