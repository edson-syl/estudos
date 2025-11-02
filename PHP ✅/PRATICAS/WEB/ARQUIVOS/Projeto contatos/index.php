<?php 
        include 'agenda.php';

        $contatos = '';

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $acao = $_POST['botao'];

            if($acao == 'mostrar') {
                $contato = new Contato('','','');
                ob_start();
                $contato->listarContato();
                $contatos = ob_get_clean();
            }
            elseif($acao == 'salvar') {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $contato = new Contato($nome, $email, $telefone);
                $contato->salvarContato();

                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            }
            

            
        }

    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTATOS</title>
</head>
<body>
    <h1>AGENDA</h1>
    <form method="post">
        <input name="nome" placeholder="Nome" type="text">
        <input name="email" placeholder="E-mail" type="email">
        <input name="telefone" placeholder="Telefone" type="tel"><br>
        <button type="submit" name="botao" value="salvar">Salvar</button>
        <button type="submit" name="botao" value="mostrar">Mostrar contatos</button>

    </form>
    <h2>LISTA DE CONTATOS</h2>
    <pre><?echo $contatos?></pre>
</body>
</html>