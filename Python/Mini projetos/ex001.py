import json

class Celular :
    def __init__(self, code, name, brand, price):
        self.code = code
        self.name = name
        self.brand = brand
        self.price = price


    def addProduct(self):
        with open('celulares.json', "a", encoding="utf-8") as arq:
            json.dump({
                "id" : self.code,
                "name": self.name,
                "brand": self.brand,
                "price": self.price
            }, arq, indent=4)

        print('Produto adicionado com sucesso!')
    
    def searchProduct(self):
        id = int(input('Informe o id do celular: '))
        with open('celulares.json', "r", encoding="utf-8") as arq:
            celulares = json.load(arq)
            if celulares["id"] == id :
                print("Produto encontrado!")
                print(f"Nome: {celulares['name']}\n"
                      f"Marca: {celulares['brand']}\n"
                      f"Preco: {celulares['price']}"
                      )
            else :
                print("Produto nao cadastrado no sistema!")

    
samsung_a23 = Celular(3425, "Galaxy A23", "Samsung", 1300)
samsung_a23.searchProduct()
