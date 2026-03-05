export class Item {
    constructor(nome, valor, quantidade) {
        this.nome = nome
        this.valor = valor
        this.quantidade = quantidade
    };

    returnSubtotal() {
        let subtotal = this.valor * this.quantidade
        return subtotal
    }
}