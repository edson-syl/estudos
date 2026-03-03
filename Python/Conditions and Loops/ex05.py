total_par = 0
total_impar = 0

for n in range(1, 11):
    num = int(input("Numero: "))
    if num % 2 == 0 :
        total_par += 1
    else:
        total_impar += 1

print(f"Entre os 10 numeros, {total_par} foram pares e {total_impar} foram impares!")
    