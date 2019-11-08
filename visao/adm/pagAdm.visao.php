<style>
    #caixaInfosAdm{
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
    #caixaInfosAdm h2{
        color: #6d6b6a;
        font-family: 'Cinzel', serif;
        margin-top: 0px;
    }
    #caixaInfosAdm h4{
        color: #6d6b6a;
        font-family: 'Cinzel', serif;
        margin-top: 0px;
    }
    #listasAdm{
        background-color: white;
        height: 60%;
        width: 60%;
        padding: 35px;
    }
    #listasAdm div{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
    }
</style>

<div id="caixaInfosAdm">
<div id="listasAdm">
    <h2>Dashboard:</h2>
    <hr size="" width="100%">
    <h4>Lista dos cruds:</h4>
    <div id="listaCrud">
        <a href="./usuario/listarUsuarios"><button class="botao2">Usuarios</button></a>
        <a href="./produto/listarProdutos"><button class="botao2">Produtos</button></a>
        <a href="./categoria/listarCategorias"><button class="botao2">Categorias</button></a>
        <a href="./cupom/listarCupons"><button class="botao2">Cupons</button></a>
        <a href="./formaPagamento/listarFormasPagamento"><button class="botao2">Formas de pagamento</button></a>
    </div>
    <br>
    <hr size="" width="100%">
    <h4>Gerar relatórios:</h4>
    <div id="listaRelatorios">
        <a href=""><button class="botao2">Produto / qnt de estoque</button></a>
        <a href=""><button class="botao2">Produtos / categoria</button></a>
        <a href=""><button class="botao2">Pedidos / intervalo de tempo</button></a>
        <a href=""><button class="botao2">Pedidos / localização</button></a>
        <a href=""><button class="botao2">Faturamento / período</button></a>
    </div>
    <br>
    <hr size="" width="100%">
    <br>
    <a href="login/logout"><button class="botao">Logout</button></a>
</div>
</div>
