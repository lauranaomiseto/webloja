<?= "<p>" . @$erros['sucesso'] . "</p>" ?>
<form action="" method="POST">
    <?= "<label for='nomeCupom'>" . @$erros['cupom'] . "Cupom:</label><br>" ?>
    <input type="text" class="caixaEntraInfo" name="nomeCupom" value="<?= @$cupom["nomeCupom"] ?>"><br><br>
    <?= "<label for='desconto'>" . @$erros['desconto'] . "Desconto em %:</label><br>" ?>
    <input type="text" class="caixaEntraInfo" name="desconto" value="<?= @$cupom["desconto"] ?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./cupom/listarCupons"><button class="botao">Voltar</button></a>


