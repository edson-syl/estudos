<?php 
    $dados = $_GET;
    $alert = [
        "status" => 'sucesso',
        "mensagem" => 'Formulário enviado!',
    ];

    if($dados['nome'] == '' || $dados['email'] == '') {
        $alert['status'] = 'erro';
        $alert['mensagem'] = 'Preencha todos os campos corretamente!';
    };

    print_r(json_encode($alert))
?>