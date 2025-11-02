<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX002 OBJETOS</title>
</head>
<body>
    <?php 
        class contaBancaria {
            public $saldo;
            public function __construct($saldo) {
                $this->saldo = $saldo;
            }

            public function mostrarSaldo() {
                echo "Seu saldo atual: R$" .$this->saldo . '<br>';
            }
            public function depositar($valor) {
                $this->saldo += $valor;
                echo 'Deposito realizado com sucesso! Saldo atual: R$' . $this->saldo . '<br>';

            }
            public function sacar($valor) {
                $this->saldo -= $valor;
                echo 'Saque de R$' . $valor . ' realizado! Saldo atual: R$' . $this->saldo .'<br';

            }
        }

        $conta01 = new contaBancaria(500);
        $conta01->mostrarSaldo();
        $conta01->depositar(50);
        $conta01->sacar(5);
        $conta01->mostrarSaldo()
    ?>
</body>
</html>