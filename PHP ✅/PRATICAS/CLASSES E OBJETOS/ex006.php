<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX006 OBJETOS</title>
</head>
<body>
    <?php 
        class Livro {
            public $titulo;
            public $autor;
            public $disponivel = true;

            public function __construct($titulo, $autor) {
                $this->titulo = $titulo;
                $this->autor = $autor;
            }

            public function info() {
                echo 'Livro: ' . $this->titulo . '<br>Autor: ' . $this->autor . '<br>Disponibilidade: ';
                echo $this->disponivel == true ? 'Disponivel<br>' : 'Indisponivel!<br>';
            }
            public function emprestar() {
                if ($this->disponivel == true) {
                    echo 'Livro emprestado!<br>';
                    $this->disponivel = false;
                }
                    
                else {
                    echo 'Livro indisponivel!<br>';
                }     
            }
            public function devolver() {
                if ($this->disponivel == false) {
                    echo 'Livro devolvido!<br>';
                    $this->disponivel = true;
                }
                else {
                    echo 'Livro ja devolvido antes!';
                }
            }
        }
        class LivroDigital extends Livro {
            public $tamanho_mb;
            
            public function download() {
                echo "Baixando " .$this->titulo . " de " . $this->tamanho_mb . 'MB<br>';
            }
        }
        $livro01 = new LivroDigital('O Pequeno Príncipe', 'Antoine de Saint-Exupéry');
        $livro01->tamanho_mb = 25;
        $livro01->info();
        $livro01->download();
        $livro01->emprestar();
        $livro01->emprestar();
        $livro01->devolver();
        $livro01->emprestar();
        $livro01->info();
    ?>
</body>
</html>