CREATE TABLE produtos(
    nome varchar(70) NOT NULL,
    preco FLOAT(5,2) NOT NULL,
    tipo varchar(13) NOT NULL,
    genero varchar(9), 
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    id integer PRIMARY KEY AUTO_INCREMENT
);
/*inserindo camisetas masculinas*/
INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Mário masculina', 99.90, 'camiseta', 'masculino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Dororo masculina', 59.90, 'camiseta', 'masculino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Saint Seiya masculina', 39.90, 'camiseta', 'masculino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Naruto masculina', 59.90, 'camiseta', 'masculino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Flash masculina', 79.90, 'camiseta', 'masculino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Iron man masculina', 89.90, 'camiseta', 'masculino');

/*inserindo camisetas femininas*/
INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Avengers feminina', 59.90, 'camiseta', 'feminino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Star Wars feminina', 79.90, 'camiseta', 'feminino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Game of Thrones feminina', 89.90, 'camiseta', 'feminino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Game of Thrones feminina', 59.90, 'camiseta', 'feminino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Batman feminina', 49.90, 'camiseta', 'feminino');

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Camiseta Batman feminina', 39.90, 'camiseta', 'feminino');

/*inserindo casacos*/
INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Casaco Playstation', 129.90, 'casaco', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Casaco Xbox', 229.90, 'casaco', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Casaco Star Wars', 99.90, 'casaco', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Casaco Star Trek', 79.90, 'casaco', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Casaco Avengers Endgame', 199.90, 'casaco', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Casaco Sonserina', 99.90, 'casaco', NULL);

/*inserindo colecionaveis*/
INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Chaveiro Game Of Thrones', 39.90, 'colecionaveis', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Figure action Darth Vader', 229.90, 'colecionaveis', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Chaveiro Harry Potter', 39.90, 'colecionaveis', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Figure Action Sasuke', 59.90, 'colecionaveis', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Funko Pop Stranger Things', 79.90, 'colecionaveis', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES ('Funko Pop Flash', 89.90, 'colecionaveis', NULL);

/*inserindo bonés*/
INSERT INTO produtos (nome, preco, tipo, genero)
VALUES('Boné Batman', 99.90, 'bone', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES('Boné Mário', 59.90, 'bone', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES('Boné Super Man', 39.90, 'bone', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES('Boné Star Wars', 59.90, 'bone', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES('Boné Stranger Things', 79.90, 'bone', NULL);

INSERT INTO produtos (nome, preco, tipo, genero)
VALUES('Boné Naruto', 89.90, 'bone', NULL);