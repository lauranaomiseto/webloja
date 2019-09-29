<style>
    #caixaInfosUsuario{
        width: 100%;
        height: 650px;
        background-image: url("publico/imagens/banners/fundoCadastro.jpg");
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    #caixaInfosUsuario h3{
        color: #6d6b6a;
        font-family: 'Cinzel', serif;
        margin-top: 0px;
    }

    #infosUsuario{
        background-color: white;
        height: 70%;
        width: 60%;
        padding: 35px;
    }
</style>


<div id="caixaInfosUsuario" >
    <div id="infosUsuario">
        <h3>visualize suas informações abaixo:</h3>
        <p>
            Nome completo: <?= $usuario['nomeCompleto'] ?>
        </p>
        <p>
            CPF: <?= $usuario['cpf'] ?>
        </p>
        <p>
            Email de login: <?= $usuario['email'] ?>
        </p>
        <br>
        <td><a href="./usuario/editarU/<?=$usuario["idUsuario"] ?>"><button class="botao1">Editar informações</button></a></td>
        <a href="./usuario/meusEnderecos<?= $usuario["idUsuario"] ?>"><button class="botao1">Meus Endereços</button></a>
        <td><a href="./usuario/deletarU/<?=$usuario["idUsuario"] ?>"><button class="botao1">Deletar conta</button></a></td><br><br>
        <a href="login/logout"><button class="botao">Logout</button></a>
    </div>
</div>

<br><br>



