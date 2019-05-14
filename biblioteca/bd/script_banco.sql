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