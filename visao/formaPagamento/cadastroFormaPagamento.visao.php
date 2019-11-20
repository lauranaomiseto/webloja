<?= "<p>" . @$erros['sucesso'] . "</p>" ?>
<form action="" method="POST">
    <?= "<label for='descricao'>" . @$erros['descricao'] . "Forma de pagamento:</label><br>" ?>
    <input type="text" class="caixaEntraInfo" name="descricao" value="<?= @$formaPagamento["descricao"] ?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./formaPagamento/listarFormasPagamento"><button class="botao">Voltar</button></a>



