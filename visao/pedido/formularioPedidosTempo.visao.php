<?="<p>".@$erros['datasInvalidas']."</p>"?>
<form action="" method="POST">
    <?= "<label for='data1'>" . @$erros['data1'] . "Selecione a primeira data:</label><br>" ?>
    <input type="date" class="caixaEntraInfo" name="data1"><br><br>
    <?= "<label for='data2'>" . @$erros['data2'] . "Selecione a segunda data:</label><br>" ?>
    <input type="date" class="caixaEntraInfo" name="data2"><br><br>
    <button class="botao">Enviar</button>
</form>
<a href="usuario/dashAdm"><button class="botao">Voltar</button></a><br><br>





