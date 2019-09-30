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
        <a href="./usuario/listarUsuarios"><button class="botao1">Usuarios</button></a>
        <a href="./produto/listarProdutos"><button class="botao1">Produtos</button></a>
        <a href="./categoria/listarCategorias"><button class="botao1">Categorias</button></a>
        <a href="./cupom/listarCupons"><button class="botao1">Cupons</button></a>
        <a href="./formaPagamento/listarFormasPagamento"><button class="botao1">Formas de pagamento</button></a>
    </div>
    <br>
    <hr size="" width="100%">
    <h4>Gerar relatórios:</h4>
    <div id="listaRelatorios">
        <a href=""><button class="botao1">Produto por quantidade de estoque</button></a>
        <a href=""><button class="botao1">Produtos por categoria</button></a>
        <a href=""><button class="botao1">Pedidos por intervalo de tempo</button></a>
        <a href=""><button class="botao1">Pedidos por localização</button></a>
        <a href=""><button class="botao1">Total de faturamento por período</button></a>
    </div>
    <br>
    <hr size="" width="100%">
    <br>
    <a href="login/logout"><button class="botao">Logout</button></a>
</div>
</div>
