CREATE TABLE carrinho_de_compras(
    idUser integer NOT NULL,
    idProduto integer NOT NULL,
    quantidade integer NOT NULL DEFAULT 0,
    id integer PRIMARY KEY AUTO_INCREMENT,
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    modified timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(idUser) REFERENCES users(id),
    FOREIGN KEY(idProduto) REFERENCES produtos(id),
    CONSTRAINT ForeignKey UNIQUE (idUser, idProduto)
);