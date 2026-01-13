<?php
    class Contato {
        public $nome;
        public $email;
        public $telefone;

        public function __construct($nome, $email, $telefone) {
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;
        }

        public function salvarContato() {
            $file = fopen('contatos.txt', 'a');
            fwrite($file, 'Nome: ' . $this->nome . ' E-mail: ' . $this->email . ' Telefone: '. $this->telefone . "\n");
            fclose($file);
        }
        public function listarContato() {
            $file = fopen('contatos.txt', 'r');
            while(!feof($file)) {
                $line = fgets($file);
                echo $line . '<br>';
            }
            fclose($file);
        }
    }
?>