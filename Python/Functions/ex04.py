def cadastrar_produto(nome, preco, /, *, categoria, estoque):
    print(f"Produto: {nome}\nValor: {preco}\nCategoria: {categoria}\nEstoque: {estoque}")


cadastrar_produto("Notebook", 3500, categoria="Eletrônicos", estoque=10)