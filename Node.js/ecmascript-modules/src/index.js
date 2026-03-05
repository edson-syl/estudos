import * as database from "./utils/database.js";
import * as api from "./utils/api.js"

database.connectToDatabase("MySQL")
database.desconnectToDatabase()
console.log(database.databaseType.userType)
api.getDataFromApi()
console.log(api.key.permission)