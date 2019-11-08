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
        height: 60%;
        width: 40%;
        padding: 35px;
    }
    #infosUsuario div{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
</style>


<div id="caixaInfosUsuario" >
    <div id="infosUsuario">
        <h3>visualize suas informações abaixo:</h3>
        <hr size="" width="100%">
        <p>
            Nome completo: <?= $usuario['nomeCompleto'] ?>
        </p>
        <p>
            CPF: <?= $usuario['cpf'] ?>
        </p>
        <p>
            Email de login: <?= $usuario['email'] ?>
        </p>
        <hr size="" width="100%">
        <br>
        <div>
            <a href="./usuario/editarU/<?=$usuario["idUsuario"] ?>"><button class="botao2">Editar informações</button></a>
            <a href="./usuario/meusEnderecos/<?= $usuario["idUsuario"] ?>"><button class="botao2">Meus endereços</button></a>
            <a href="./pedido/verPedidoIdUsuario/<?= $usuario["idUsuario"] ?>"><button class="botao2">Meus pedidos</button></a>
        </div>
        <br>
        <hr size="" width="100%">
        <br>
        <a href="login/logout"><button class="botao">Logout</button></a>
    </div>
</div>




