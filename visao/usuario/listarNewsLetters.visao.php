<table>
    <tr>
        <th>Email</th>
    </tr>
    <?php foreach($newsLetters as $newsLetter): ?>
    <tr>
        <td><?=$newsLetter["email"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<a href="cliente/newsLetter">Receba novidades sem compromisso!</a>