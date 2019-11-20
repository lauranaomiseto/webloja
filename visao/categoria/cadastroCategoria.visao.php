<?="<p>".@$erros['sucesso']."</p>"?>
<form action="" method="POST">
    <?= "<label for='nomeCategoria'>" . @$erros['categoria'] . "Categoria:</label><br>" ?>
    <input type="text" class="caixaEntraInfo" name="nomeCategoria" value="<?=@$categoria["nomeCategoria"]?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./categoria/listarCategorias"><button class="botao">Voltar</button></a>

