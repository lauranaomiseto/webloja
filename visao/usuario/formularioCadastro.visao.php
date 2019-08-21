<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>
<br><br>
        <form method="POST" action="">
            <input type="text" placeholder="Nome completo" name="nomeCompletoUsuario" value="<?=@$usuario['nomeCompleto']?>" class="caixaEntraInfo"><br><br>
            <input type="text" placeholder="CPF" name="cpf" value="<?=@$usuario['email']?>" class="caixaEntraInfo"><br><br>
            <input type="text" placeholder="Email" name="emailUsuario" value="<?=@$usuario['email']?>" class="caixaEntraInfo"><br><br>
            <input type="password" placeholder="Senha" name="senhaUsuario" value="<?=@$usuario['senha']?>" class="caixaEntraInfo"><br><br>
            <input type="password" placeholder="Confirme sua senha" class="caixaEntraInfo"  name="confirmaSenhaUsuario"><br><br>
    
            <button class="botao">Cadastrar</button>
        </form>

<a href="./usuario/listarUsuarios">Voltar</a>