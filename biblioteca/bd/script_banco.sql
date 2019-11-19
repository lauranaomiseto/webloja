create table usuario(
idUsuario int not null auto_increment,
nomeCompleto varchar(100) not null,
email varchar(60) not null,
senha varchar(12) not null,
cpf varchar(60) not null,
tipoUsuario varchar(5),
primary key(idUsuario)
);

create table endereco (
idEndereco int not null auto_increment,
idUsuario int not null,
logradouro varchar(60) not null,
numero varchar(7) not null,
complemento varchar(60) not null,
bairro varchar(60) not null,
cidade varchar(60)not null,
cep varchar(60) not null,
nomeEndereco varchar(100) not null,
primary key (idEndereco),
foreign key (idUsuario) references usuario (idUsuario) on delete cascade on update cascade
);

create table produto(
idProduto int not null auto_increment,
idCategoria int not null,
nomeProduto varchar(100) not null,
descricaoProduto varchar(500) not null,
precoProduto double (10,2) not null,
estoque_minimo int,
estoque_maximo int,
imagem varchar(200),
quant_estoque integer,
primary key(idProduto),
foreign key (idCategoria) references categoria (idCategoria) on delete cascade on update cascade
);

create table categoria(
idCategoria int not null auto_increment,
nomeCategoria varchar(100) not null,
primary key(idCategoria)
);

create table pedido_produto (
idProduto int not null,
idPedido int not null,
quantidade int not null,
primary key (idProduto, idPedido),
foreign key (idProduto) references pedido (idPedido) on delete cascade on update cascade,
foreign key (idPedido) references produto (idProduto) on delete cascade on update cascade
);

create table formaPagamento (
idFormaPagamento int not null auto_increment,
descricao varchar(45),
primary key (idFormaPagamento)
);

create table pedido (
idPedido int not null auto_increment, 
idUsuario int not null,
idEndereco int not null,
idFormaPagamento int not null,
dataCompra date not null,
primary key (idPedido),
foreign key (idUsuario) references usuario (idUsuario) on delete cascade on update cascade,
foreign key (idEndereco) references endereco (idEndereco) on delete cascade on update cascade
);

create table cupom(
idCupom int not null auto_increment,
nomeCupom varchar(60) not null,
desconto int not null,
primary key(idCupom)
);

update usuario set tipoUsuario="A" where idusuario=1; 

/* Tira a quantidade do produto */
DELIMITER @@
DROP TRIGGER tgr_grenciaQuantidade @@
CREATE TRIGGER webloja.tgr_grenciaQuantidade
AFTER INSERT ON webloja.pedido_produto
FOR EACH ROW
BEGIN
	update produto set quant_estoque = quant_estoque- New.quantidade
	where produto.idProduto = new.idProduto;
end @@ 
DELIMITER ; 

/* Restaura a quatidade do producto */
DELIMITER @@
DROP TRIGGER tgr_restauraQuantidade @@
CREATE TRIGGER webloja.tgr_restauraQuantidade
AFTER DELETE ON webloja.pedido_produto
FOR EACH ROW
begin
    update produto set  quant_estoque = quant_estoque + old.quantidade
    where idProduto=old.idProduto;
end @@ 
DELIMITER ; 

/* Deleta pedido_produto */
DELIMITER @@
DROP TRIGGER tgr_deletarPedidoProduto @@
CREATE TRIGGER webloja.tgr_deletarPedidoProduto
AFTER DELETE ON webloja.pedido
FOR EACH ROW
begin
    delete from pedido_produto where idPedido=old.idPedido;
end @@ 
DELIMITER ; 

/* Adiciona pedido_produto */
DELIMITER @@
DROP PROCEDURE prc_adicionarPedidoProduto @@
CREATE PROCEDURE prc_adicionarPedidoProduto
(in oIdProduto int, oIdPedido int, aQuantidade int)
begin
    insert into pedido_produto (idProduto, idPedido, quantidade)
    values (oIdProduto, oIdPedido, aQuantidade);
end @@ 
DELIMITER ; 

/* Seleciona pedidos dos usuários */
DELIMITER @@
DROP PROCEDURE prc_pegarPedidoIdUsuario @@
CREATE PROCEDURE prc_pegarPedidoIdUsuario
(in oIdUsuario int)
begin
    select pedido.idPedido, pedido.dataCompra, formaPagamento.descricao from pedido 
    inner join formaPagamento on pedido.idFormaPagamento=formaPagamento.idFormaPagamento
    where pedido.idUsuario=oIdUsuario;
end @@ 
DELIMITER ; 