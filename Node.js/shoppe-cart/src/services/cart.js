
import { Item } from "./item.js";

export let itens = [];

export const verCarrinho = () => {
    for (let i = 0; i < itens.length; i++) {
        console.log(itens[i])
    }
}

export const adicionarItem = (novo_item) => {
    itens.push(novo_item)
    console.log("Item adicionado com sucesso!")
}

export const removerItem = (nomeProduto) => {
    let index = itens.findIndex(item => item.nome == nomeProduto);
    if (index > -1) {
        itens.splice(index, 1);
        console.log(`${nomeProduto} removido com sucesso!`)
    }
    else {
        console.log("Produto nao encontrado!")
    }
}

export const calcularTotal = () => {
    let total = 0;
    for (let i = 0; i < itens.length; i++) {
        total += itens[i].returnSubtotal()
    }
    console.log(`Valor total do carrinho R$${total}`)
    return total;
    
}