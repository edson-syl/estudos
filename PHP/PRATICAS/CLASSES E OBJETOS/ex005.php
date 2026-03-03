<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX005 OBJETOS</title>
</head>
<body>
    <?php
        class Calculadora {
            public $valor1;
            public $valor2;

            public function __construct($valor1, $valor2) {
                $this->valor1 = $valor1;
                $this->valor2 = $valor2;

            }

            public function somar() {
                $soma = $this->valor1 + $this->valor2;
                echo 'A soma deu ' . $soma . '<br>';

            }
            public function subtrair() {
                $sub = $this->valor1 - $this->valor2;
                echo 'A subtracao deu ' . $sub . '<br>';
            }
            public function multiplicar() {
                $mult = $this->valor1 * $this->valor2;
                echo 'A multiplicacao deu ' . $mult . '<br>';
            }
            public function dividir() {
                $div = $this->valor1 / $this->valor2;
                echo 'A divisao deu ' . $div . '<br>'; 
            }

        }

        $calculo01 = new Calculadora(20, 10);
        $calculo01->somar();
        $calculo01->dividir();
        $calculo01->multiplicar();
        $calculo01->subtrair();
    ?>
</body>
</html>