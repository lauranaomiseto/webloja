<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br><br>
<form action="" method="POST">
    <input type="text" placeholder="Email" class="caixaEntraInfo" name="emailNewsLetter"><br><br>
    <button class="botao">Cadastrar</button>
</form>
<a href="./newsLetter/listarNewsLetters"><button class="botao">Voltar</button></a>