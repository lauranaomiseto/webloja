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

create table cliente(
idCliente int not null auto_increment,
nomeCompleto varchar(100) not null,
email varchar(60) not null,
senha varchar(12) not null,
primary key(idCliente)
);

create table newsletter(
email varchar (60) not null
);

create table produto(
idProduto int not null auto_increment,
nomeProduto varchar(100) not null,
descricaoProduto varchar(500) not null,
precoProduto double (10,2) not null,
primary key(idProduto)
);

create table categoria(
idCategoria int not null auto_increment,
nomeCategoria varchar(100) not null,
descricaoCategoria varchar(500) not null,
primary key(idCategoria)
);

//////GDB//////

create table cliente(
idcliente int not null auto_increment,
nomecompleto varchar(100) not null,
email varchar(60) not null,
senha varchar(12) not null,
cpf varchar(60) not null,
datadenascimento varchar(10),
sexo varchar(60),
tipoususario varchar(5),
primary key(idcliente)
);

create table endereco (
idendereco int not null auto_increment,
idcliente int not null,
logradouro varchar(60) not null,
numero varchar(7) not null,
complemento varchar(60) not null,
bairro varchar(60) not null,
cidade varchar(60)not null,
cep varchar(60) not null,
primary key (idendereco),
foreign key (idcliente) references cliente (idcliente) on delete cascade on update cascade
);

create table pedido (
idpedido int not null auto_increment, 
idcliente int not null,
idendereco int not null,
datacompra date not null,
primary key (idpedido),
foreign key (idcliente) references cliente (idcliente) on delete cascade on update cascade,
foreign key (idendereco) references endereco (idendereco) on delete cascade on update cascade
);

create table predido_produto (
idproduto int not null,
idpedido int not null,
quantidade int not null,
primary key (idproduto, idpedido),
foreign key (idproduto) references pedido (idpedido) on delete cascade on update cascade,
foreign key (idpedido) references produto (idproduto) on delete cascade on update cascade
);

create table produto(
idproduto int not null auto_increment,
nomeproduto varchar(100) not null,
descricaoproduto varchar(60) not null,
precoProduto double (10,2) not null,
tamanho varchar(60) not null,
estoque_minimo int not null,
estoque_maximo int not null,
primary key(idproduto)
);

create table estoque(
idestoque int not null auto_increment,
idProduto int not null,
qtde int not null,
primary key(idestoque),
foreign key (idproduto) references produto (idproduto) on delete cascade on update cascade 
);

create table cupom(
idcupom int not null auto_increment,
nomecupom varchar(60) not null,
desconto int not null,
primary key (idcupom)
);

create table log_porduto(
id_log int not null auto_increment, 
tabela varchar(45) not null,
usuario varchar(45) not null,
data_hora datetime not null,
acao varchar(45) not null,
dados varchar(1000) not null,
primary key (id_log)
);

(0-ADM, 1-CLENTE, 2-VENDEDOR, 3-GERENTE)
insert into cliente values (1, "Ana", "ana@gmail", "1234567", "12345", "2000-01-01", "f", "1");
insert into cliente values (2, "Jorge", "jorge@gmail", "1234567", "22345", "2000-02-02", "m", "1");
insert into cliente values (3, "Maria", "maria@gmail", "1234567", "32345", "2000-03-03", "f", "1");
insert into cliente values (4, "Mario", "mario@gmail", "1234567", "42345", "2000-04-04", "m", "0");
insert into cliente values (5, "Julia", "julia@gmail", "1234567", "52345", "2000-05-05", "f", "0");

insert into endereco values (1, 1, "Ana rua", "111", "casa", "Ana bairro", "Ana cidade", "12345678");
insert into endereco values (2, 2, "Jorge rua", "112", "ap", "Jorge bairro", "Jorge cidade", "22345678");
insert into endereco values (3, 3, "Maria rua", "221", "casa", "Maria bairro", "Maria cidade", "32345678");
insert into endereco values (4, 4, "Mario rua", "222", "ap", "Mario bairro", "Mario cidade", "42345678");
insert into endereco values (5, 5, "Julia rua", "331", "casa", "Julia bairro", "Julia cidade", "52345678");










