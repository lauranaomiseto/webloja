<?php
    if (ehPost()){
        foreach ($erros as $erro){
            echo "*".$erro."<br>";
        }
    }
?>
<br>
<form action="" method="POST">
    Nome da categoria:<input type="text" name="nomeCategoria" value="<?=@$categoria["nomeCategoria"]?>"><br><br>
    Descrição da categoria:<input type="text" name="descricaoCategoria" value="<?=@$categoria["descricaoCategoria"]?>"><br><br>
    <input type="submit">
</form>
<a href="./produto/listarCategorias">Voltar</a>

