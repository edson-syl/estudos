<?php
    session_start();
    $_SESSION['usuario'] = 'Edson';
    
    $sair = $_POST['sair'] ?? '';
    
    if($sair) {
        session_unset();
        session_destroy();
        echo 'Sessao destruida!';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX001 SESSAO</title>
</head>
<body>
    <form method="post" action="<?echo $_SERVER['PHP_SELF'];?>">
        <button name="sair" value="1" type="submit">Sair</button>
    </form>
</body>
</html>