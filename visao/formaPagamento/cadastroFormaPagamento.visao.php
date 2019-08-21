<?php
    if (ehPost()){
        foreach ($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br><br>
<form action="" method="POST">
    <input type="text" placeholder="Forma de pagamento" class="caixaEntraInfo" name="descricao" value="<?=@$formaPagamento["descricao"]?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./formaPagamento/listarFormasPagamento">Voltar</a>



