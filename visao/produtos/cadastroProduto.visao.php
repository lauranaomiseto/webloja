<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "*$erro<br>";
        }
    }
?>
<br>
    <form action="" method="POST">
            Nome: <input type="text" name="nomeProduto"><br><br>
            Descrição: <input type="text" name="descricaoProduto"><br><br>
            Preço: <input type="text" name="precoProduto"><br><br>
            <input type="submit">
    </form>
