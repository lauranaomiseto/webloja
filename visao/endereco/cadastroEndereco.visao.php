<?php 
    if(ehPost()){
        foreach($erros as $erro){
            echo "<br>*$erro";
        }
    }
?>

<br><br>
    <form action="" method="POST">
        <input type="text" placeholder="Logradouro" class="caixaEntraInfo" name="logradouro" value="<?=@$endereco['logradouro']?>"><br><br>
        <input type="text" placeholder="Número" class="caixaEntraInfo" name="numero" value="<?=@$endereco['numero']?>"><br><br>
        <input type="text" placeholder="Complemento" class="caixaEntraInfo" name="complemento" value="<?=@$endereco['complemento']?>"><br><br>
        <input type="text" placeholder="Bairro" class="caixaEntraInfo" name="bairro" value="<?=@$endereco['bairro']?>"><br><br>
        <input type="text" placeholder="Cidade" class="caixaEntraInfo" name="cidade" value="<?=@$endereco['cidade']?>"><br><br>
        <input type="text" placeholder="CEP" class="caixaEntraInfo" name="cep" value="<?=@$endereco['cep']?>"><br><br>
        <button class="botao">Cadastrar</button>
    </form>

<a href="./usuario/listarUsuarios">Voltat</a>

