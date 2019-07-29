<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br>
<form action="" method="POST">
    <input type="text" placeholder="Email" class="caixaEntraInfo" name="emailNewsLetter"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./cliente/listarNewsLetters">Voltar</a>