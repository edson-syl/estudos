saldo = 59
while True:

    print("BANCO SANTANDER\n")
    print("[1] Sacar \n[2] Depositar \n[3] Saldo \n[0] Sair")
    opcao = int(input(": "))

    # Saque
    if opcao == 1:
        print(f"Seu saldo: {saldo}")
        valor = float((input("Valor a ser sacado: ")))
        if saldo >= valor:
            saldo -= valor
            print(f"Voce sacou R${valor}. Seu saldo atual e R${saldo}")
        else:
            print("Saldo insuficiente! Tente novamente.")
    
    # Deposito
    elif opcao == 2:
        valor = float((input("Valor a ser depositado: ")))
        saldo += valor
        print(f"Voce depositou R${valor}. Seu saldo atual e R${saldo}")

    # Saldo
    elif opcao == 3:
        print(f"Seu saldo atual e R${saldo}")
        
    # Break
    else:
        print("Banco encerrado! Ate a proxima!")
        break