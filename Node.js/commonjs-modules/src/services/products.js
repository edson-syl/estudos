//products functions
const productType = {
    version : "digital",
    tax: "x1"
}

async function getFullName(codId, productName) {
    console.log("Product " + codId + "--" + productName)
}

async function getProductLabel(productName) {
    console.log("Product " + productName)
}

module.exports = {
    getFullName, getProductLabel, productType
}