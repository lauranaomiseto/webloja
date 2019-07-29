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
    <input type="text" placeholder="Descrição" name="descricaoCategoria" class="caixaEntraInfo" value="<?=@$categoria["descricaoCategoria"]?>"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./produto/listarCategorias">Voltar</a>

