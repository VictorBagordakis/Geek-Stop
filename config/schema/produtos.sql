CREATE TABLE produtos(
    nome varchar(70) NOT NULL,
    preco FLOAT(5,2) NOT NULL,
    tipo varchar(13) NOT NULL,
    genero varchar(9), 
    imagem varchar(100),
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    id integer PRIMARY KEY AUTO_INCREMENT
);
/*inserindo camisetas masculinas*/
INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Mário masculina', 99.90, 'camiseta', 'masculino', 'camisetas\\camisetas_masculinas\\camiseta_masculina1.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Dororo masculina', 59.90, 'camiseta', 'masculino', 'camisetas\\camisetas_masculinas\\camiseta_masculina2.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Saint Seiya masculina', 39.90, 'camiseta', 'masculino', 'camisetas\\camisetas_masculinas\\camiseta_masculina3.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Naruto masculina', 59.90, 'camiseta', 'masculino', 'camisetas\\camisetas_masculinas\\camiseta_masculina4.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Flash masculina', 79.90, 'camiseta', 'masculino', 'camisetas\\camisetas_masculinas\\camiseta_masculina5.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Iron man masculina', 89.90, 'camiseta', 'masculino', 'camisetas\\camisetas_masculinas\\camiseta_masculina6.jpg');

/*inserindo camisetas femininas*/
INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Avengers feminina', 59.90, 'camiseta', 'feminino', 'camisetas\\camisetas_femininas\\camiseta_feminina1.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Star Wars feminina', 79.90, 'camiseta', 'feminino', 'camisetas\\camisetas_femininas\\camiseta_feminina2.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Game of Thrones feminina', 89.90, 'camiseta', 'feminino', 'camisetas\\camisetas_femininas\\camiseta_feminina3.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Game of Thrones feminina', 59.90, 'camiseta', 'feminino', 'camisetas\\camisetas_femininas\\camiseta_feminina4.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Batman feminina', 49.90, 'camiseta', 'feminino', 'camisetas\\camisetas_femininas\\camiseta_feminina5.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Camiseta Batman feminina', 39.90, 'camiseta', 'feminino', 'camisetas\\camisetas_femininas\\camiseta_feminina6.jpg');

/*inserindo casacos*/
INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Casaco Playstation', 129.90, 'casaco', NULL, 'casacos\\casaco1.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Casaco Xbox', 229.90, 'casaco', NULL, 'casacos\\casaco2.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Casaco Star Wars', 99.90, 'casaco', NULL, 'casacos\\casaco3.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Casaco Star Trek', 79.90, 'casaco', NULL, 'casacos\\casaco4.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Casaco Avengers Endgame', 199.90, 'casaco', NULL, 'casacos\\casaco5.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Casaco Sonserina', 99.90, 'casaco', NULL, 'casacos\\casaco6.jpg');

/*inserindo colecionaveis*/
INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Chaveiro Game Of Thrones', 39.90, 'colecionaveis', NULL, 'colecionavel\\colecionavel1.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Figure action Darth Vader', 229.90, 'colecionaveis', NULL, 'colecionavel\\colecionavel2.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Chaveiro Harry Potter', 39.90, 'colecionaveis', NULL, 'colecionavel\\colecionavel3.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Figure Action Sasuke', 59.90, 'colecionaveis', NULL, 'colecionavel\\colecionavel4.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Funko Pop Stranger Things', 79.90, 'colecionaveis', NULL, 'colecionavel\\colecionavel5.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES ('Funko Pop Flash', 89.90, 'colecionaveis', NULL, 'colecionavel\\colecionavel6.jpg');

/*inserindo bonés*/
INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES('Boné Batman', 99.90, 'bone', NULL, 'bones\\bone1.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES('Boné Mário', 59.90, 'bone', NULL, 'bones\\bone2.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES('Boné Super Man', 39.90, 'bone', NULL, 'bones\\bone3.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES('Boné Star Wars', 59.90, 'bone', NULL, 'bones\\bone4.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES('Boné Stranger Things', 79.90, 'bone', NULL, 'bones\\bone5.jpg');

INSERT INTO produtos (nome, preco, tipo, genero, imagem)
VALUES('Boné Naruto', 89.90, 'bone', NULL, 'bones\\bone6.jpg');