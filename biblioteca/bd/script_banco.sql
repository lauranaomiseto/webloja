DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');

///////meu///////

create table usuario(
idUsuario int not null auto_increment,
nomeCompleto varchar(100) not null,
email varchar(60) not null,
senha varchar(12) not null,
cpf varchar(60) not null,
dataNascimento varchar(10),
sexo varchar(60),
tipoUsusario varchar(5),
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
imagem varchar(60),
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


create table newsletter(
email varchar (60) not null
);



//////GDB//////

create table usuario(
idusuario int not null auto_increment,
nomecompleto varchar(100) not null,
email varchar(60) not null,
senha varchar(12) not null,
cpf varchar(60) not null,
datadenascimento varchar(10) not null,
sexo varchar(60) not null,
tipoususario varchar(5) not null,
primary key(idusuario)
);

create table endereco (
idendereco int not null auto_increment,
idusuario int not null,
logradouro varchar(60) not null,
numero varchar(7) not null,
complemento varchar(60) not null,
bairro varchar(60) not null,
cidade varchar(60)not null,
cep varchar(60) not null,
primary key (idendereco),
foreign key (idusuario) references usuario (idusuario) on delete cascade on update cascade
);

create table pedido (
idpedido int not null auto_increment, 
idusuario int not null,
idendereco int not null,
datacompra date not null,
primary key (idpedido),
foreign key (idusuario) references usuario (idusuario) on delete cascade on update cascade,
foreign key (idendereco) references endereco (idendereco) on delete cascade on update cascade
);

create table produto(
idproduto int not null auto_increment,
idcategoria int not null,
nomeproduto varchar(100) not null,
descricaoproduto varchar(60) not null,
precoproduto double (10,2) not null,
tamanho varchar(60) not null,
estoque_minimo int not null,
estoque_maximo int not null,
primary key(idproduto),
foreign key (idcategoria) references categoria (idcategoria) on delete cascade on update cascade
);

create table categoria(
idcategoria int not null auto_increment,
descricao varchar(50),
primary key (idcategoria)
);

create table pedido_produto (
idproduto int not null,
idpedido int not null,
quantidade int not null,
primary key (idproduto, idpedido),
foreign key (idproduto) references pedido (idpedido) on delete cascade on update cascade,
foreign key (idpedido) references produto (idproduto) on delete cascade on update cascade
);


create table cupom(
idcupom int not null auto_increment,
nomecupom varchar(60) not null,
desconto int not null,
primary key (idcupom)
);

create table log_produto(
id_log int not null auto_increment, 
tabela varchar(45) not null,
usuario varchar(45) not null,
data_hora datetime not null,
acao varchar(45) not null,
dados varchar(1000) not null,
primary key (id_log)
);

Operações CRUD:

(0-ADM, 1-CLENTE)
(idusuario, nomecompleto, email, senha, cpf, datadenascimento, sexo, tipousuario)
insert into usuario values (1, "Ana", "ana@gmail", "1234567", "12345", "2000-01-01", "f", "1");
insert into usuario values (2, "Jorge", "jorge@gmail", "1234567", "22345", "2000-02-02", "m", "1");
insert into usuario values (3, "Maria", "maria@gmail", "1234567", "32345", "2000-03-03", "f", "0");
update usuario set email="ana123@gmail" where idusuario=1; 
select idusuario, nomecompleto, email, sexo, tipousuario from usuario where idusuario=1;
delete from usuario where idusuario=1;

(idendereco, idusuario, logradouro, numero, complemento, bairro, cidade, cep)
insert into endereco values (1, 1, "Ana rua", "111", "casa", "Ana bairro", "Ana cidade", "12345678");
insert into endereco values (2, 2, "Jorge rua", "112", "ap", "Jorge bairro", "Jorge cidade", "22345678");
insert into endereco values (3, 3, "Maria rua", "221", "casa", "Maria bairro", "Maria cidade", "32345678");
update endereco set logradouro="jorgerua", numero="300", bairro="jorgebairro", cep="23456789" where idusuario=2; 
select * from endereco where idusuario=2;
delete from endereco where idusuario=1;


(idpedido, idusuario, idendereco, datacompra)
insert into pedido values (1, 1, 1, "2019-06-14");
insert into pedido values (2, 2, 2, "2019-07-15");
insert into pedido values (3, 3, 3, "2019-08-16");
update pedido set idendereco=1 where idusuario=3;
select * from pedido;
delete from pedido where idusuario=1;

(idproduto, nomeproduto, descricaoproduto, precoproduto, tamanho, estoque_minimo, estoque_maximo)
insert into produto values (1, "Pintura 1", "Original", 1500.00, "40 x 50cm", 1, 1);
insert into produto values (2, "Pintura 2", "Original", 1000.00, "35 x 40cm", 1, 1);
insert into produto values (3, "Coleção 1", "6 prints", 30.00, "155 x 230mm", 5, 20);
update produto set precoproduto=1300.00 where idproduto=1;
select nomeproduto, descricaoproduto, precoproduto from produto where nomeproduto like "Pintura%";
delete from produto where idproduto=1;

(idproduto, idpedido, qquantidade)
insert into pedido_produto values (3, 1, 2);
insert into pedido_produto values (1, 2, 1);
insert into pedido_produto values (2, 3, 1);
update pedido_produto set quantidade=5 where idpedido=1 and idproduto=3;
select * from pedido_produto;
delete from pedido_produto where idproduto=1;


(idcategoria, descricao)
insert into categoria values (1, "Coleções");
insert into categoria values (2, "Livros");
insert into categoria values (3, "Originais");
update categoria set descricao="Coleções de prints" where idcategoria=1;
select * from categoria where idcategoria=1;
delete from categoria where idcategoria=2;

(idestoque, idproduto, qtde)
insert into estoque values (1, 1, 1);
insert into estoque values (2, 2, 1);
insert into estoque values (3, 3, 10);
update estoque set qtde=15 where idproduto=3;
select * from estoque where idproduto=3;
delete from estoque where idproduto=1;

(idcupom, nomecupom, desconto)
insert into cupom values (1, "DESCONTO10", 10);
insert into cupom values (2, "DESCONTO15", 15);
insert into cupom values (3, "DESCONTO20", 20);
update cupom set nomecupom="DESCONTO25", desconto=25 where idcupom=3;
select * from cupom where nomecupom like "%25";
delete from cupom where desconto=10;

(id_log, tabela, usuario, data_hora, acao, dados)
insert into log_produto values ();






