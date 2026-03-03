<?php
if(isset($_POST['addtask']) && $_POST['addtask'] == 'adicionar') {
    $novatarefa = trim($_POST['novatarefa'] ?? '');
    if (!empty($novatarefa)) {
        $file = fopen('tarefas.txt', 'a');
        fwrite($file, $novatarefa . "\n");
        fclose($file);
    }
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}


$tarefas = [];
if(file_exists('tarefas.txt')) {
    $tarefas = file('tarefas.txt', FILE_IGNORE_NEW_LINES);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX003 ARQUIVOS</title>
</head>
<body>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <input name="novatarefa" placeholder="Tarefa">
        <button type="submit" name="addtask" value="adicionar">Adicionar</button>
    </form>

    <h2>Lista de tarefas</h2>
    <?php
        foreach($tarefas as $tarefa) {
            echo htmlspecialchars($tarefa) . "<br>";
        }
    ?>
</body>
</html>
