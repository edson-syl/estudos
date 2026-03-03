<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX004 OBJETOS</title>
</head>
<body>
    <?php
        class Retangulo {
            public $largura;
            public $altura;

            public function __construct($largura, $altura) {
                $this->largura = $largura;
                $this->altura = $altura;
            }

            public function area() {
                $area = $this->largura * $this->altura;
                echo 'A area do seu retangulo eh: ' . $area . '<br>';
            }

            public function perimetro() {
                $perimetro = 2 * ($this->largura + $this->altura);
                echo 'O perimetro do seu retangulo eh: ' . $perimetro . '<br>';
            }
        }

        $retangulo01 = new Retangulo(10, 20);
        $retangulo01->area();
        $retangulo01->perimetro();
    ?>
</body>
</html>