create database biblioteca;
use biblioteca;
grant all privileges on biblioteca.* to usuario@'localhost' IDENTIFIED BY 'senha';
flush privileges;

/*tipo = 0,bibliotecario;1,cliente*/

CREATE TABLE pessoa (
id int(10) NOT NULL auto_increment,
nome varchar (50) NOT NULL,
email varchar (50) NOT NULL,
rg int (10) NOT NULL,
telefone int (12),
endereco varchar (75),
cidade varchar (25),
tipo int(1),
CONSTRAINT pk_pessoa PRIMARY KEY (id),
UNIQUE KEY uk_pessoa_rg (email),
UNIQUE KEY uk_pessoa_email (email));

CREATE TABLE login (
usuario varchar (50) NOT NULL,
pass varchar (30) NOT NULL,
FOREIGN KEY (usuario) REFERENCES pessoa(email),
UNIQUE KEY uk_login_usuario (usuario),
CONSTRAINT pk_login PRIMARY KEY (usuario));

CREATE TABLE genero (
id int (2) NOT NULL auto_increment,
nome varchar (20) NOT NULL,
descricao varchar (100),
UNIQUE KEY uk_genero_nome (nome),
CONSTRAINT pk_genero PRIMARY KEY (id));

CREATE TABLE titulo (
id int (10) NOT NULL auto_increment,
nome varchar (100) NOT NULL,
descricao varchar (200),
CONSTRAINT pk_titulo PRIMARY KEY (id));

CREATE TABLE autor (
id int (5) NOT NULL auto_increment,
nome varchar (100) NOT NULL,
UNIQUE KEY uk_autor_nome (nome),
CONSTRAINT pk_autor PRIMARY KEY (id));

CREATE TABLE autor_do_titulo (
id_autor int (5) NOT NULL,
id_titulo int (10) NOT NULL,
FOREIGN KEY (id_autor) REFERENCES autor(id),
FOREIGN KEY (id_titulo) REFERENCES titulo(id),
CONSTRAINT pk_autor_do_titulo PRIMARY KEY (id_autor,id_titulo));

CREATE TABLE genero_do_titulo (
id_genero int (2) NOT NULL,
id_titulo int (10) NOT NULL,
FOREIGN KEY (id_genero) REFERENCES genero(id),
FOREIGN KEY (id_titulo) REFERENCES titulo(id),
CONSTRAINT pk_genero_do_titulo PRIMARY KEY (id_genero,id_titulo));


CREATE TABLE livro (
id int (10) NOT NULL auto_increment,
id_titulo int (10) NOT NULL,
disponivel boolean DEFAULT TRUE,
reservado boolean DEFAULT FALSE,
FOREIGN KEY (id_titulo) REFERENCES titulo(id),
CONSTRAINT pk_livro PRIMARY KEY (id,id_titulo));

/*data_retirada ou renovacao*/
CREATE TABLE emprestimo (
id int (10) NOT NULL auto_increment,
id_pessoa int(10) NOT NULL,
id_livro int (10) NOT NULL,
data_r date NOT NULL,
data_devolucao date,
FOREIGN KEY (id_pessoa) REFERENCES pessoa(id),
FOREIGN KEY (id_livro) REFERENCES livro(id),
CONSTRAINT pk_emprestimo PRIMARY KEY (id));

CREATE TABLE multa (
id_pessoa int(10) NOT NULL,
valor decimal(10,2) NOT NULL,
CONSTRAINT pk_multa PRIMARY KEY (id_pessoa),
FOREIGN KEY (id_pessoa) REFERENCES pessoa(id));

