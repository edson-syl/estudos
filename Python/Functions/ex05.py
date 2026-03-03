def multiplicar(a, b):
    return a * b

def somar(a, b):
    return a + b

def subtrair(a, b):
    return a - b

def executar_operacao(a, b, func):
    return func(a, b)

print(executar_operacao(5, 10, somar))
print(executar_operacao(5, 10, subtrair))
print(executar_operacao(5, 10, multiplicar))