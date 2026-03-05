const {getFullName, productType} = require("./services/products")
const config = require("./services/config")
const database = require("./services/database")

async function main() {
    console.log("Carrinho de compras")
    getFullName(435, "Iphone 14")
    // product.getProductLabel("Iphone 17 Pro Max")

    database.connectToDatabase("MySQL")
    database.disconnectDatabase()
}

main();