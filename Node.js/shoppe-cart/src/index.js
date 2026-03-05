import {Item} from "./services/item.js"
import * as cart from "./services/cart.js"

let item01 = new Item("Iphone 13", 3000, 41)
let item02 = new Item("Samsung A23", 1300, 41)

cart.adicionarItem(item01)
cart.adicionarItem(item02)
cart.verCarrinho()
cart.calcularTotal()
cart.removerItem("Iphone 13")
cart.calcularTotal()