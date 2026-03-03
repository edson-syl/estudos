agenda = {
    "contato1": {
        "nome": "Ana Silva",
        "telefone": "11987654321",
        "cidade": "São Paulo"
    },
    "contato2": {
        "nome": "Carlos Souza",
        "telefone": "21912345678",
        "cidade": "Rio de Janeiro"
    },
    "contato3": {
        "nome": "Mariana Lima",
        "telefone": "31999887766",
        "cidade": "Belo Horizonte"
    }
}

agenda["contato4"] = {
    "nome" : "Edson Silva",
    "telefone": "81992281271",
    "cidade" : "Abreu e Lima"
}

agenda.pop("contato2")
agenda_copia = agenda.copy()

print(f"Numero de Ana: {agenda['contato1']["telefone"]}")
print("email" in agenda["contato1"])
print(agenda_copia)

