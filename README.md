#README TRABALHO PROGRAMACAO PHP

Requisitos para o trabalho:

* Usuarios deve fazer login para acessar o sistema.
* CRUD COMPLETO ( Create , Read, Update, Delete )
* Feature Pesquisar 
* Segunda tabela com pelo menos 4 atributos.

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
## CAMPOS INICIAIS
```
INSERT INTO login(nome, senha) VALUES ('admin', '123');

INSERT INTO clientes(nome, email, fone) VALUES ('Cliente 1', 'cliente1@email.com', '55 99990000');

INSERT INTO clientes(nome, email, fone) VALUES ('Cliente 2', 'cliente2@email.com', '55 99990000');

INSERT INTO clientes(nome, email, fone) VALUES ('Cliente 3', 'cliente2@email.com', '55 99990000');

```
