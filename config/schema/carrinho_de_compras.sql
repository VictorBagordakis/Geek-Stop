CREATE TABLE carrinho_de_compras(
    idUser integer NOT NULL,
    idProduto integer NOT NULL,
    FOREIGN KEY(idUser) REFERENCES users(id),
    FOREIGN KEY(idProduto) REFERENCES produtos(id)
);