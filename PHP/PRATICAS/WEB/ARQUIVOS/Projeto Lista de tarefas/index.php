<?php
    include 'lista.php';
    $id;
    if(!isset($_COOKIE['ID_TAREFA'])) {
        setcookie('ID_TAREFA', 1);
    }
    else {
        setcookie('ID_TAREFA', $id);
    }

    $adicionar = $_POST['add'] ?? '';
    if ($adicionar == 'adicionar') {
        $name = $_POST['name'];
        $contato = new Contato() {}
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE TAREFAS</title>
</head>
<body>
    <form method="post">
        <input placeholder="Tarefa" name="tarefa">
        <button type="submit" name="add" value="adicionar">Adicionar</button>
    </form>
    <br>
    <h1>LISTA DE TAREFAS</h1>
</body>
</html>