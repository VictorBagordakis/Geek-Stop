CREATE TABLE produtos(
    nome varchar(70) NOT NULL,
    preco FLOAT(5,2) NOT NULL,
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    id integer PRIMARY KEY AUTO_INCREMENT
);
/*inserindo camisetas masculinas*/
INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Mário masculina', 99.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Dororo masculina', 59.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Saint Seiya masculina', 39.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Naruto masculina', 59.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Flash masculina', 79.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Iron man masculina', 89.90);

/*inserindo camisetas femininas*/
INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Avengers feminina', 59.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Star Wars feminina', 79.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Game of Thrones feminina', 89.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Game of Thrones feminina', 59.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Batman feminina', 49.90);

INSERT INTO produtos (nome, preco)
VALUES ('Camiseta Batman feminina', 39.90);

/*inserindo casacos*/
INSERT INTO produtos (nome, preco)
VALUES ('Casaco Playstation', 129.90);

INSERT INTO produtos (nome, preco)
VALUES ('Casaco Xbox', 229.90);

INSERT INTO produtos (nome, preco)
VALUES ('Casaco Star Wars', 99.90);

INSERT INTO produtos (nome, preco)
VALUES ('Casaco Star Trek', 79.90);

INSERT INTO produtos (nome, preco)
VALUES ('Casaco Avengers Endgame', 199.90);

INSERT INTO produtos (nome, preco)
VALUES ('Casaco Sonserina', 99.90);

/*inserindo colecionaveis*/
INSERT INTO produtos (nome, preco)
VALUES ('Chaveiro Game Of Thrones', 39.90);

INSERT INTO produtos (nome, preco)
VALUES ('Figure action Darth Vader', 229.90);

INSERT INTO produtos (nome, preco)
VALUES ('Chaveiro Harry Potter', 39.90);

INSERT INTO produtos (nome, preco)
VALUES ('Figure Action Sasuke', 59.90);

INSERT INTO produtos (nome, preco)
VALUES ('Funko Pop Stranger Things', 79.90);

INSERT INTO produtos (nome, preco)
VALUES ('Funko Pop Flash', 89.90);