CREATE TABLE usersProdutos(
    idUser integer NOT NULL,
    idProduto integer NOT NULL,
    FOREIGN KEY(idUser) REFERENCES users(id),
    FOREIGN KEY(idProduto) REFERENCES produtos(id)
);