<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001 OBJETOS</title>
</head>
<body>
    <?php
        class Pessoa {
            public $nome;
            public $idade;

            public function __construct($nome, $idade) {
                $this->nome = $nome;
                $this->idade = $idade;
            }
            public function apresentar() {
                echo 'Olá, meu nome é ' .$this->nome. ' e tenho '.$this->idade.' anos.';
            }

        }
        $pessoa1 = new Pessoa("Edson", 19);
        $pessoa1->apresentar();
    ?>
</body>
</html>