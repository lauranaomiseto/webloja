<?php
    if (ehPost()){
        foreach ($erros as $erro){
            echo "*".$erro."<br>";
        }
    }
?>
<br>
<form action="" method="POST">
    Nome da categoria:<input type="text" name="nomeCategoria"><br><br>
    Descrição da categoria:<input type="text" name="descricaoCategoria"><br><br>
    <input type="submit">
</form>

