<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "*$erro<br>";
        }
    }
    
    print_r($cliente);
?>
<br>
    <form action="" method="POST">
        Nome completo: <input type="text" name="nomeCompletoCliente" value="<?=@$cliente['nomeCompletoCliente']?>"><br><br>
        Email: <input type="text" name="emailCliente" value="<?=@$cliente['email']?>"><br><br>
        Senha: <input type="password" name="senhaCliente" value="<?=@$cliente['senha']?>"><br><br>
        Confirme sua senha: <input type="password" name="confirmaSenhaCliente" value="<?=@$cliente['confirmaSenhaCliente']?>"><br><br>
        <input type="submit">
    </form>
