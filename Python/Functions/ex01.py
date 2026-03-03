def saudar(nome = "", sobrenome = ""):
    if nome == "" and sobrenome == "":
        print(f"Hi, Guest! Welcome!")
    else:
        print(f"Hi, {nome} {sobrenome}! Welcome!")
    
saudar01 = saudar("Edson", "Silva")
