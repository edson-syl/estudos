<?php
    class Tarefa{
        public $id;
        public $nome;
        public $status = 'Pendente'; 

        public function __construct($id, $nome) {
            $this->id = $id;
            $this->nome = $nome;
        }

        public function salvarTarefa() {
            $file = fopen('tarefas.txt', 'a');
            fwrite($file, $this->id .' - '. $this->nome .' - '. $this->status . PHP_EOL);
            fclose($file);
        }
        public function marcarConcluida($id) {
            $file = 'tarefas.txt';
            $linhas = file($file);

            foreach($linhas as $i => $linha) {
                $partes = explode(' - ', trim($linha));
                if ($partes[0] == $id && $partes[2] == 'Pendente') {
                    $partes[2] = 'Concluido';
                }
                $linhas[$i] = implode(' - ', $partes) . PHP_EOL;
                
            }

            file_put_contents($file, $linhas);
        }
    }
?>