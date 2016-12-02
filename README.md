#TRABALHO PROGRAMACAO PHP

##REQUISITOS:

* Usuarios deve fazer login para acessar o sistema.
* CRUD COMPLETO ( Create , Read, Update, Delete ).
* Pesquisar
* Segunda tabela com pelo menos 4 atributos.
* Pelo menos um atributo tem que ter máscara de entrada.

------

## TECNOLOGIAS UTILIZADAS

* PHP - OO
* MYSQL
* HTML5
* CSS3
* Javascript
* Bootstrap
* jQuery
* [jQuery Mask](https://github.com/igorescobar/jQuery-Mask-Plugin)

------

## DIAGRAMA

![alt text](http://edu.jef.link/controleclientes/assets/img/diagrama.png "Diagramas")


------

## BANCO DE DADOS

```
CREATE TABLE login(
  id serial NOT NULL,
  nome character varying(36) NOT NULL,
  senha character varying(36) NOT NULL,
  CONSTRAINT login_pkey PRIMARY KEY (id)
);

CREATE TABLE Clientes(
 id serial,
 nome varchar(50),
 email varchar(50),
 fone varchar(50),
 PRIMARY KEY (id)
);
```
------

## CAMPOS INICIAIS
```
INSERT INTO login(nome, senha) VALUES ('admin', '123');

INSERT INTO clientes(nome, email, fone) VALUES ('Cliente 1', 'cliente1@email.com', '55 99990000');

INSERT INTO clientes(nome, email, fone) VALUES ('Cliente 2', 'cliente2@email.com', '55 99990000');

INSERT INTO clientes(nome, email, fone) VALUES ('Cliente 3', 'cliente2@email.com', '55 99990000');

```
------

## DISPONIVEL ONLINE

http://edu.jef.link/controleclientes/
