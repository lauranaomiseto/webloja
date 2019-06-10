<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "*$erro<br>";
        }
    }
?>
<br>
<form action="" method="POST">
    Email:<input type="text" name="emailNewsLetter"><br><br>
    <input type="submit">
</form>
