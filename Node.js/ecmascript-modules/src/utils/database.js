const databaseType = {
    userType: "admin",
    typeData: "dataLocal"
}

async function connectToDatabase(database) {
    console.log("Conectado ao banco " + database)
}

async function desconnectToDatabase() {
    console.log("Desconectado do servidor!")
}

export {
    connectToDatabase,
    desconnectToDatabase,
    databaseType
}