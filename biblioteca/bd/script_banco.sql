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

create table newsletter(
email varchar (60) not null
);



update usuario set tipoUsuario="A" where idusuario=2; 

