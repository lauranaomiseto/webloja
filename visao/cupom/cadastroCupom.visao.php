<?php
    if (ehPost()){
        foreach ($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br><br>
<form action="" method="POST">
    <input type="text" placeholder="Cupom" class="caixaEntraInfo" name="nomeCupom" value="<?=@$cupom["nomeCupom"]?>"><br><br>
    <input type="text" placeholder="Desconto" class="caixaEntraInfo" name="desconto" value="<?=@$cupom["desconto"]?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./cupom/listarCupons">Voltar</a>


