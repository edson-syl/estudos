<?php
    header('Content-Type: application/json; charset=utf-8');

    $server = 'localhost';
    $user = 'root';
    $pass = 'Edson0706.';
    $data = 'exercicios_jquery';

    $conexao = new mysqli($server, $user, $pass, $data);
    
    $comentarios = '';
    if (!empty($_GET['comentarios'])) {
        $comentarios = $_GET['comentarios'];
    } else if(!empty($_POST['comentarios'])) {
        $comentarios = $_POST['comentarios'];
    }

    if ($comentarios != '') {
        $sql = "INSERT INTO tb_comentarios(comentarios) VALUES ('$comentarios')";
        $conexao->query($sql);
        
    }
    
    $sql = 'SELECT * FROM tb_comentarios';
    $requisicao = $conexao->query($sql);

    $dados = [];
    if($requisicao->num_rows > 0) {
        while ($linha = $requisicao->fetch_assoc()) {
            $dados[] = $linha;
        }

        echo json_encode($dados);
    }
?>