<?php
    if (ehPost()){
        foreach ($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br>
<form action="" method="POST">
    <input type="text" placeholder="Categoria" class="caixaEntraInfo" name="nomeCategoria" value="<?=@$categoria["nomeCategoria"]?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./categoria/listarCategorias">Voltar</a>

